<?php

class ManageSiteController extends BaseController {

    public function showGetManageSites()
	{
        $limit          = 3;
        $all_mngsite    = 0;
        
        $srv_resp       = new stdClass();
        $mng_site_db    = new ManageSite();
     	$site_db        = new Site();
        
        $all_sites      = DB::table('SITE')->get();
        
        foreach($all_sites as $site) {
        
            $site->managers = DB::table('MANAGE_SITE')
                ->join('MANAGER', 'MANAGER.admin_id', '=', 'MANAGE_SITE.admin_id')
                ->where('site_id', $site->site_id)
                ->get();
            
            $site->url_count    = count($site->managers);
            $site->offset       = 0;
            $site->limit        = $limit;
            $site->max_page     = floor($site->url_count / $site->limit);
            
            $all_mngsite        += $site->url_count;
            
            if (0 == ($site->url_count % $site->limit)) {
                $site->max_page    = $site->max_page - 1;
            }
            
            for ($count = 0; $count <= $site->max_page; $count++) {
                $site->pages[]  = $count;
            }
        }
        
        $srv_resp->sites        = $all_sites;
        
        $srv_resp->url_count    = $all_mngsite;
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
    
    public function addSaveManageSite()
    {
        $manager_db     = new Manager();
        $mngsite_db     = new ManageSite();
        
        $err_msg        = array();
        $data           = array();
        $srv_resp       = new stdClass();
        $post_data      = Input::all();
        
        $data['admin_id']   = $post_data['admin_id'];
        $data['pwd']        = $post_data['pwd'];
        $data['nick_name']  = $post_data['nick_name'];
        $data['use_flag']   = $post_data['use_flag'];
        $data['name']       = $post_data['name'];
        $data['reg_sites']  = $post_data['reg_sites'];
        
        $errors_found       = $this->validateManageSite($data);
        
        if (0 >= count($errors_found)) {
            $manager_db->addRecord($data);
            
            foreach ($post_data['reg_sites'] as $site) {
                $data['site_id']    = $site;
                $mngsite_db->addRecord($data);
            }
        }
        else {
            $err_msg[] = $errors_found;
        }
        
        $srv_resp   = $this->showGetManageSites();
        
        $json_data          = json_decode($srv_resp);
        $json_data->errors  = $err_msg;
        
        return json_encode($json_data);
    }
    
    public function addSaveManageSites()
    {
        $manager_db     = new Manager();
        
        $data           = array();
        $srv_resp       = new stdClass();
        $post_data      = Input::all();
        
        foreach ($post_data as $site) {
            foreach ($site['managers'] as $manager) {
                if (isset($manager['site_check'])) {
                    if ('1' == $manager['site_check']) {
                        $data['admin_id']   = $manager['admin_id'];
                        $data['use_flag']   = $manager['use_flag'];
                        
                        $manager_db->updateUseFlag($data);
                    }
                }
            }
        }
        
        $srv_resp   = $this->showGetManageSites();
        
        return $srv_resp;
    }
    
    public function deleteMngSites()
    {
        $post_data      = Input::all();
        $mng_site_db    = new ManageSite();
        
        foreach ($post_data as $site) {
            foreach ($site['managers'] as $manager) {
                if (isset($manager['site_check'])) {
                    if ('1' == $manager['site_check']) {
                        $mng_site_db->deleteRecord($manager['ms_seq']);
                    }
                }
            }
        }
        
        $data = $this->showGetManageSites();
        
        return $data;
    }
    
    private function validateManageSite($data)
    {
        $messages   = array();                      /* Validation Messages according to rules   */
        $rules      = array();                      /* Validation Rules                         */
        $errors     = array();
        
        $messages   = array(
            'pwd.required'          => '비밀번호 is required',
            'nick_name.required'    => '닉네임 is required',
            'use_flag.required'     => '사용여부 is required',
            'use_flag.numeric'      => '사용여부 must be a number',
            'name.required'         => '이름 must be a number',
        );
        
        $rules      = array(
            'admin_id'      => 'required|numeric',
            'pwd'           => 'required',
            'nick_name'     => 'required',
            'use_flag'      => 'required|numeric',
            'name'          => 'required',
        );
        
        /*  Run the Laravel Validation  */
		$validator = Validator::make($data, $rules, $messages);
        
        if (0 >= count($data['reg_sites'])) {
            $errors[0]  = 'Please choose at least 1 Site';
        }
        else if ($validator->fails()) {
            $errors   = $validator->messages()->all();
        }
        
        return $errors;
    }
}
