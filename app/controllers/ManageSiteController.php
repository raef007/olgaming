<?php

class ManageSiteController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

    public function showGetManageSites()
	{
        $limit      = 3;
        
        $mng_site_db    = new ManageSite();
     	$site_db        = new Site();
        
        $all_sites      = $site_db->getAllRecord();
        $all_mngsite    = DB::table('MANAGE_SITE')
            ->join('MANAGER', 'MANAGER.admin_id', '=', 'MANAGE_SITE.admin_id')
            ->join('SITE', 'SITE.site_id', '=', 'MANAGE_SITE.site_id')
            ->get();
        
        $page_info              = new stdClass();
        $page_info->url_count   = count($all_mngsite);
        $page_info->offset      = 0;
        $page_info->limit       = $limit;
        $page_info->max_page    = floor($page_info->url_count / $page_info->limit);
        
        if (0 == ($page_info->url_count % $page_info->limit)) {
            $page_info->max_page    = $page_info->max_page - 1;
        }
        
        for ($count = 0; $count <= $page_info->max_page; $count++) {
            $page_info->pages[]  = $count;
        }
        
        return json_encode([$all_mngsite, $page_info, $all_sites]);
	}
    
    public function addSaveManageSite()
    {
        $manager_db     = new Manager();
        $mngsite_db     = new ManageSite();
        
        $data           = array();
        $srv_resp       = new stdClass();
        $post_data      = Input::all();
        
        $data['admin_id']   = $post_data['admin_id'];
        $data['pwd']        = $post_data['pwd'];
        $data['nick_name']  = $post_data['nick_name'];
        $data['use_flag']   = $post_data['use_flag'];
        $data['name']       = $post_data['name'];
        
        $manager_db->addRecord($data);
        
        foreach ($post_data['reg_sites'] as $site) {
            $data['site_id']    = $site;
            $mngsite_db->addRecord($data);
        }
        
        $srv_resp   = $this->showGetManageSites();
        
        return $srv_resp;
    }
    
    public function addSaveManageSites()
    {
        $manager_db     = new Manager();
        
        $data           = array();
        $srv_resp       = new stdClass();
        $post_data      = Input::all();
        
        for ($idx = 0; $idx < count($post_data); $idx++) {
            
            if (isset($post_data[$idx]['site_check'])) {
                if ('1' == $post_data[$idx]['site_check']) {
                    $data['admin_id']   = $post_data[$idx]['admin_id'];
                    $data['use_flag']   = $post_data[$idx]['use_flag'];
                    
                    $manager_db->updateUseFlag($data);
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
            
            if (isset($site['del_check'])) {
                if ('true' == $site['del_check']) {
                    $mng_site_db->deleteRecord($site['ms_seq']);
                }
            }
            
        }
        
        $data = $this->showGetManageSites();
        
        return $data;
    }
}
