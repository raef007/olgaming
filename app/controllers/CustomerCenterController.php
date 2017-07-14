<?php

class CustomerCenterController extends BaseController {

    public function showGetCustCenter()
	{
        $all_count  = 0;
        $limit      = 3;
        $all_sites  = DB::table('SITE')->get();
        
        foreach($all_sites as $site) {
            $site->questions = DB::table('CUSTOMER_C')
                ->select('*', 'CUSTOMER_C.reg_date')
                ->where('site_id', $site->site_id)
                ->join('MANAGER', 'MANAGER.admin_id', '=', 'CUSTOMER_C.admin_id')
                ->get();
            
            $site->url_count    = count($site->questions);
            $site->offset       = 0;
            $site->limit        = $limit;
            $site->max_page     = floor($site->url_count / $site->limit);
            
            $all_count          += $site->url_count;
            
            if (0 == ($site->url_count % $site->limit)) {
                $site->max_page     = $site->max_page - 1;
            }
            
            for ($count = 0; $count <= $site->max_page; $count++) {
                $site->pages[]  = $count;
            }
            
            foreach ($site->questions as $question) {
                $question->messages = DB::table('CUSTOMER_C_QA')
                    ->where('cc_seq', $question->cc_seq)
                    ->get();
            }
            
            $site->templates    = DB::table('CUSTOMER_C_TEMPLATE')
                ->where('site_id', $site->site_id)
                ->get();
        }
        
        $page_info              = new stdClass();
        $page_info->url_count   = $all_count;
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
    
    public function searchAllCustCenter()
    {
        $all_count  = 0;
        $limit      = 3;
        
        $post_data  = Input::all();
        
        $all_sites  = DB::table('SITE')->get();
        
        foreach($all_sites as $site) {
            $query  = DB::table('CUSTOMER_C')
                ->select('*', 'CUSTOMER_C.reg_date')
                ->join('MANAGER', 'MANAGER.admin_id', '=', 'CUSTOMER_C.admin_id')
                ->where('site_id', $site->site_id);
            
            if ('' != $post_data['from']) {
                $query->where('CUSTOMER_C.reg_date', '>=', $post_data['from']);
            }
                
            if ('' != $post_data['to']) {
                $query->where('CUSTOMER_C.reg_date', '<=', $post_data['to']);
            }
            
            if ((isset($post_data['filter_by']))
            && (isset($post_data['filter_val']))) {
                if (('' != $post_data['filter_by'])
                && ('' != $post_data['filter_val'])) {
                    
                    if ('subject' != $post_data['filter_by']) {
                        $query->where('MANAGER.'.$post_data['filter_by'], $post_data['filter_val']);
                    }
                    else {
                        $filter = $post_data['filter_by'];
                        $query->where($post_data['filter_by'], 'like', '%'.$post_data['filter_val'].'%');
                    }
                }
            }
            
            $site->questions    = $query->get();
            $site->url_count    = count($site->questions);
            $site->offset       = 0;
            $site->limit        = $limit;
            $site->max_page     = floor($site->url_count / $site->limit);
            
            $all_count          += $site->url_count;
            
            if (0 == ($site->url_count % $site->limit)) {
                $site->max_page     = $site->max_page - 1;
            }
            
            for ($count = 0; $count <= $site->max_page; $count++) {
                $site->pages[]  = $count;
            }
            
            foreach ($site->questions as $question) {
                $question->messages = DB::table('CUSTOMER_C_QA')
                    ->where('cc_seq', $question->cc_seq)
                    ->get();
            }
        }
        
        $page_info              = new stdClass();
        $page_info->url_count   = $all_count;
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
    
    public function addSaveTemplate()
    {
        $template_db    = new CustomerTemplate();
        
        $data       = array();
        $srv_resp   = new stdClass();
        $post_data  = Input::all();
        
        $data['cct_seq']    = $post_data['cct_seq'];
        $data['site_id']    = $post_data['site_id'];
        $data['subject']    = $post_data['subject'];
        $data['text']       = $post_data['text'];
        
        $template_db->addUpdateRecord($data);
        
        $srv_resp   = $this->showGetCustCenter();
        
        return $srv_resp;
    }
    
    public function deleteTemplate()
    {
        $template_db    = new CustomerTemplate();
        
        $srv_resp       = new stdClass();
        $post_data      = Input::all();
        
        $template_db->deleteRecord($post_data['cct_seq']);       
        
        $srv_resp   = $this->showGetCustCenter();
        
        return $srv_resp;
    }
    
    public function sendMessage()
    {
        $qa_db    = new CustomerQa();
        
        $data       = array();
        $srv_resp   = new stdClass();
        $post_data  = Input::all();
        
        $data['cc_seq']         = $post_data['cc_seq'];
        $data['site_id']        = $post_data['site_id'];
        $data['text']           = $post_data['text'];
        
        $data['ccq_seq']        = 0;
        $data['user_id']        = 1;
        $data['answer_flag']    = 1;
        $data['qa_flag']        = 1;
        
        $qa_db->addUpdateRecord($data);
        
        $srv_resp   = $this->showGetCustCenter();
        
        return $srv_resp;
    }
    
}