<?php

class FaqController extends BaseController {
    
    public function showGetFaqs()
	{
        $limit      = 3;
        $all_faqs   = 0;
        $srv_resp   = new stdClass();
        $all_sites  = DB::table('SITE')->get();
        
        foreach($all_sites as $site) {
            $site->faqs = DB::table('FAQ')
                ->where('site_id', $site->site_id)
                ->get();
            
            $site->url_count    = count($site->faqs);
            $site->offset       = 0;
            $site->limit        = $limit;
            $site->max_page     = floor($site->url_count / $site->limit);
            
            $all_faqs           += $site->url_count;
            
            if (0 == ($site->url_count % $site->limit)) {
                $site->max_page     = $site->max_page - 1;
            }
            
            for ($count = 0; $count <= $site->max_page; $count++) {
                $site->pages[]  = $count;
            }
        }
        
        $srv_resp->sites        = $all_sites;
        $srv_resp->url_count    = $all_faqs;
        $srv_resp->offset       = 0;
        $srv_resp->limit        = $limit;
        $srv_resp->max_page     = floor($srv_resp->url_count / $srv_resp->limit);
        
        if (0 == ($srv_resp->url_count % $srv_resp->limit)) {
            $srv_resp->max_page    = $srv_resp->max_page - 1;
        }
        
        for ($count = 0; $count <= $srv_resp->max_page; $count++) {
            $srv_resp->pages[]  = $count;
        }
        
        return json_encode($srv_resp);
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
        
        $srv_resp              = new stdClass();
        $srv_resp->url_count   = count($all_sites);
        $srv_resp->offset      = 0;
        $srv_resp->limit       = $limit;
        $srv_resp->max_page    = floor($srv_resp->url_count / $srv_resp->limit);
        
        if (0 == ($srv_resp->url_count % $srv_resp->limit)) {
            $srv_resp->max_page    = $srv_resp->max_page - 1;
        }
        
        for ($count = 0; $count <= $srv_resp->max_page; $count++) {
            $srv_resp->pages[]  = $count;
        }
        
        return json_encode([$all_sites, $srv_resp]);
	}
    
    public function addSaveFaq()
    {
        $faq_db     = new Faq();
        
        $err_msg    = array();
        $data       = array();
        $srv_resp   = new stdClass();
        $post_data  = Input::all();
        
        $data['f_seq']      = $post_data['f_seq'];
        $data['site_id']    = $post_data['site_id'];
        $data['admin_id']   = 'Admin1';
        $data['title']      = $post_data['title'];
        $data['text']       = $post_data['text'];
        $data['sort']       = $post_data['sort'];
        $data['show_flag']  = $post_data['show_flag'];
        
        $errors_found   = $this->validateFaqs($data);
        
        if (0 >= count($errors_found)) {
            $faq_db->addUpdateRecord($data);
        }
        else {
            $err_msg[] = $errors_found;
        }
        
        $srv_resp   = $this->showGetFaqs();
        
        $json_data          = json_decode($srv_resp);
        $json_data->errors  = $err_msg;
        
        return json_encode($json_data);
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
                        $errors_found   = $this->validateFaqs($faq);

                        if (0 >= count($errors_found)) {
                            $faq_db->addUpdateRecord($faq);
                        }
                         else {
                            $err_msg[] = $errors_found;
                        }
                    }
                }
            }
        }

        $srv_resp   = $this->showGetFaqs();
        
        $json_data          = json_decode($srv_resp);
        $json_data->errors  = $err_msg;
        
        return json_encode($json_data);
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
    
    private function validateFaqs($data)
    {
        $messages   = array();                      /* Validation Messages according to rules   */
        $rules      = array();                      /* Validation Rules                         */
        $errors     = array();
        
        $messages   = array(
            'title.required'        => '제목 is required',
            'text.required'         => 'Content is required',
            'sort.required'         => '구분 is required',
            'sort.numeric'          => '구분 must be a numeric',
            'show_flag.required'    => '노출여부 is required',
        );
        
        $rules      = array(
            'f_seq'     => 'required|numeric',
            'site_id'   => 'required|numeric',
            'admin_id'  => 'required',
            
            'title'     => 'required',
            'text'      => 'required',
            'sort'      => 'required|numeric',
            'show_flag' => 'required|boolean',
        );
        
        /*  Run the Laravel Validation  */
		$validator = Validator::make($data, $rules, $messages);
        
        if ($validator->fails()) {
            $errors   = $validator->messages()->all();
        }
        
        return $errors;
    }
}