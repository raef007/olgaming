<?php

class SiteController extends BaseController {
    
    public function showGetSites()
	{
        $limit      = 3;
        $all_sites  = DB::table('SITE')->get();
        $srv_resp   = new stdClass();
        
        foreach($all_sites as $site) {
            $site->site_urls = DB::table('SITE_URL')
                ->where('site_id', $site->site_id)
                ->get();
            
            $site->url_count    = count($site->site_urls);
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
        
        $srv_resp->sites        = $all_sites;
        $srv_resp->url_count    = count($all_sites);
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
    
    public function addSaveSites()
    {
        $site_db        = new Site();
        $site_url_db    = new SiteUrl();
        $post_data      = Input::all();
        $err_msg        = array();
        
        foreach ($post_data as $site) {
            
            $data['site_id']        = $site['site_id'];
            $data['site_name']      = $site['site_name'];
            $data['reg_way']        = $site['reg_way'];
            
            $error_found            = $this->validateSite($data);
            
            if (0 >= count($error_found)) {
                $site_id                = $site_db->addUpdateRecord($data);
                
                foreach ($site['site_urls'] as $url) {
                
                    $data['site_id']        = $site_id;
                    $data['su_seq']         = $url['su_seq'];
                    $data['site_url']       = $url['site_url'];
                    $data['page_of_manage'] = '';
                    
                    $error_found            = $this->validateSiteUrl($data);
                    
                    if (0 >= count($error_found)) {
                        $site_url_id            = $site_url_db->addUpdateRecord($data);
                    }
                    else {
                        $err_msg[] = $error_found;
                    }
                }
            }
            else {
                $err_msg[] = $error_found;
            }
            
        }
        
        $data = $this->showGetSites();
        
        $json_data          = json_decode($data);
        $json_data->errors  = $err_msg;
        
        return json_encode($json_data);
    }
    
    public function addSaveUrl()
    {
        $site_db        = new Site();
        $site_url_db    = new SiteUrl();
        $post_data      = Input::all();
        $err_msg        = array();
        
        $data['su_seq']         = '0';
        $data['site_id']        = $post_data['site_id'];
        $data['site_url']       = $post_data['site_url'];
        $data['page_of_manage'] = $post_data['page_of_manage'];
        
        $error_found            = $this->validateSiteUrl($data);
        
        if (0 >= count($error_found)) {
            $data['su_seq']         = $site_url_db->addUpdateRecord($data);
        }
        else {
            $err_msg[] = $error_found;
        }
        
        $data = $this->showGetSites();
        
        $json_data          = json_decode($data);
        $json_data->errors  = $err_msg;
        
        return json_encode($json_data);
    }
    
    public function deleteUrlSites()
    {
        $post_data      = Input::all();
        $site_db        = new Site();
        $site_url_db    = new SiteUrl();
        
        foreach ($post_data as $site) {
        
            $count_site = count($site['site_urls']);
            $count_del  = 0;
            
            foreach ($site['site_urls'] as $url) {
                if (isset($url['del_check'])) {
                    if ('true' == $url['del_check']) {
                        $site_url_db->deleteRecord($url['su_seq']);
                        $count_del++;
                    }
                }
            }
            
            if (0 < $count_site) {
                if ($count_del >= $count_site) {
                    $site_db->deleteRecord($site['site_id']);
                }
            }
        }
        
        $data = $this->showGetSites();
        
        return $data;
    }
    
    public function deleteUrl($su_seq)
    {
        $data           = 1;
        $site_url_db    = new SiteUrl();
        $site_url_db->deleteRecord($su_seq);
        
        $data = $this->showGetSites();
        
        return $data;
    }
    
    private function validateSite($data)
    {
        $messages   = array();                      /* Validation Messages according to rules   */
        $rules      = array();                      /* Validation Rules                         */
        $errors     = array();
        
        $messages   = array(
            'site_id.required'      => 'Site ID is required',
            'site_id.numeric'       => 'Site ID must be a number',
            'site_name.required'    => '사이트 is required',
            'reg_way.required'      => '가입방식 Account is required',
            'reg_way.numeric'       => '가입방식 must be a number',
        );
        
        $rules      = array(
            'site_id'       => 'required|numeric',
            'site_name'     => 'required',
            'reg_way'       => 'required|numeric',
        );
        
        /*  Run the Laravel Validation  */
		$validator = Validator::make($data, $rules, $messages);
        
        if ($validator->fails()) {
            $errors   = $validator->messages()->all();
        }
        
        return $errors;
    }
    
    private function validateSiteUrl($data)
    {
        $messages   = array();                      /* Validation Messages according to rules   */
        $rules      = array();                      /* Validation Rules                         */
        $errors     = array();
        
        $messages   = array(
            'site_id.required'          => 'Site ID is required',
            'site_id.numeric'           => 'Site ID must be a number',
            'site_url.required'         => 'URL is required',
            'site_url.url'              => 'Invalid URL Format',
        );
        
        $rules      = array(
            'site_id'           => 'required|numeric',
            'su_seq'            => 'required|numeric',
            'site_url'          => 'required|url',
        );
        
        /*  Run the Laravel Validation  */
		$validator = Validator::make($data, $rules, $messages);
        
        if ($validator->fails()) {
            $errors   = $validator->messages()->all();
        }
        
        return $errors;
    }
}
