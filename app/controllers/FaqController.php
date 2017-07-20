<?php

class FaqController extends BaseController {
    
    public function showGetFaqs()
	{
        $limit      = 3;
        $all_sites  = DB::table('SITE')->get();
        
        foreach($all_sites as $site) {
            $site->faqs = DB::table('FAQ')
                ->where('site_id', $site->site_id)
                ->get();
            
            $site->url_count    = count($site->faqs);
            $site->offset       = 0;
            $site->limit        = $limit;
            $site->max_page     = floor($site->url_count / $site->limit);
            
            if (0 == ($site->url_count % $site->limit)) {
                $site->max_page     = $site->max_page - 1;
            }
            
            for ($count = 0; $count <= $site->max_page; $count++) {
                $site->pages[]  = $count;
            }
        }
        
        $page_info              = new stdClass();
        $page_info->url_count   = count($all_sites);
        $page_info->offset      = 0;
        $page_info->limit       = $limit;
        $page_info->max_page    = floor($page_info->url_count / $page_info->limit);
        
        if (0 == ($page_info->url_count % $page_info->limit)) {
            $page_info->max_page    = $page_info->max_page - 1;
        }
        
        for ($count = 0; $count <= $page_info->max_page; $count++) {
            $page_info->pages[]  = $count;
        }
        
        return json_encode([$all_sites, $page_info]);
	}
    
    public function searchFaqs()
	{
        $limit      = 3;
        $post_data  = Input::all();
        
        $all_sites  = DB::table('SITE')->get();
        
        foreach($all_sites as $site) {
            $query  = DB::table('FAQ')
                ->where('site_id', $site->site_id);
            
            if ((isset($post_data['filter_by']))
            && (isset($post_data['filter_val']))) {
                if (('' != $post_data['filter_by'])
                && ('' != $post_data['filter_val'])) {
                    
                    if ('text' == $post_data['filter_by']) {
                        $query->where(function ($filtered) use ($post_data) {
                                $filtered->where('text', 'like', '%'.$post_data['filter_val'].'%')
                                    ->orWhere('title', 'like', '%'.$post_data['filter_val'].'%');
                            });
                    }
                    else {
                        $query->where($post_data['filter_by'], 'like', '%'.$post_data['filter_val'].'%');
                    }
                }
            }
            
            $site->faqs         = $query->get();
            $site->url_count    = count($site->faqs);
            $site->offset       = 0;
            $site->limit        = $limit;
            $site->max_page     = floor($site->url_count / $site->limit);
            
            if (0 == ($site->url_count % $site->limit)) {
                $site->max_page     = $site->max_page - 1;
            }
            
            for ($count = 0; $count <= $site->max_page; $count++) {
                $site->pages[]  = $count;
            }
        }
        
        $page_info              = new stdClass();
        $page_info->url_count   = count($all_sites);
        $page_info->offset      = 0;
        $page_info->limit       = $limit;
        $page_info->max_page    = floor($page_info->url_count / $page_info->limit);
        
        if (0 == ($page_info->url_count % $page_info->limit)) {
            $page_info->max_page    = $page_info->max_page - 1;
        }
        
        for ($count = 0; $count <= $page_info->max_page; $count++) {
            $page_info->pages[]  = $count;
        }
        
        return json_encode([$all_sites, $page_info]);
	}
    
    public function addSaveFaq()
    {
        $faq_db     = new Faq();
        
        $data       = array();
        $srv_resp   = new stdClass();
        $post_data  = Input::all();
        
        $data['f_seq']      = 0;
        $data['site_id']    = $post_data['site_id'];
        $data['title']      = $post_data['title'];
        $data['text']       = $post_data['text'];
        $data['sort']       = $post_data['sort'];
        $data['show_flag']  = $post_data['show_flag'];
        
        $faq_db->addUpdateRecord($data);
        
        $srv_resp   = $this->showGetFaqs();
        
        return $srv_resp;
    }
    
    public function addSaveFaqs()
    {
        $faq_db         = new Faq();
        
        $data           = array();
        $srv_resp       = new stdClass();
        $post_data      = Input::all();
        
        foreach ($post_data as $site) {
            
            $data['site_id']    = $site['site_id'];
            
            foreach ($site['faqs'] as $faq) {
                if (isset($faq['faq_check'])) {
                    if ('1' == $faq['faq_check']) {
                        $data['f_seq']      = $faq['f_seq'];
                        $data['title']      = $faq['title'];
                        $data['text']       = $faq['text'];
                        $data['sort']       = $faq['sort'];
                        $data['show_flag']  = $faq['show_flag'];
                        
                        $faq_db->addUpdateRecord($data);
                    }
                }
            }
        }

        $srv_resp   = $this->showGetFaqs();
        
        return $srv_resp;
    }
    
    public function deleteFaqs()
    {
        $srv_resp       = new stdClass();
        $faq_db         = new Faq();
        
        $post_data      = Input::all();
        
        foreach ($post_data as $site) {
            
            foreach ($site['faqs'] as $faq) {
                if (isset($faq['faq_check'])) {
                    if ('1' == $faq['faq_check']) {
                        $faq_db->deleteRecord($faq['f_seq']);
                    }
                }
            }
        }
        
        $srv_resp   = $this->showGetFaqs();
        
        return $srv_resp;
    }
}