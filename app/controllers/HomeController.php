<?php

class HomeController extends BaseController {

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

	public function showIndex()
	{
        return View::make('admin.index');
	}
    
    public function showGetSites()
	{
        $all_sites  = DB::table('SITE')->get();
        
        foreach($all_sites as $site) {
            $site->site_urls = DB::table('SITE_URL')
                ->where('site_id', $site->site_id)
                ->get();
        }
        
        return json_encode($all_sites);
	}
    
    public function addSaveSites()
    {
        $site_db        = new Site();
        $site_url_db    = new SiteUrl();
        $post_data      = Input::all();
        
        $site_upd       = array();
        
        foreach ($post_data as $site) {
            
            $data['site_id']        = $site['site_id'];
            $data['site_name']      = $site['site_name'];
            $data['reg_way']        = $site['reg_way'];
            
            $site_id                = $site_db->addUpdateRecord($data);

            $url_upd                = array();
            
            foreach ($site['site_urls'] as $url) {
                
                $data['site_id']        = $site_id;
                $data['su_seq']         = $url['su_seq'];
                $data['site_url']       = $url['site_url'];
                $data['page_of_manage'] = '';
                
                $site_url_id            = $site_url_db->addUpdateRecord($data);
                
                $url['su_seq']          = $site_url_id;
                
                $url_upd[]              = $url;
            }
            
            $site['site_id']        = $site_id;
            $site['site_urls']      = $url_upd;
            $site_upd[]             = $site;
        }
        
        return json_encode($site_upd);
    }
    
    public function addSaveUrl()
    {
        $site_db        = new Site();
        $site_url_db    = new SiteUrl();
        $post_data      = Input::all();
        
        $site_upd       = array();
        
        $data['su_seq']         = '0';
        $data['site_id']        = $post_data['site_id'];
        $data['site_url']       = $post_data['site_url'];
        $data['page_of_manage'] = $post_data['page_of_manage'];
        
        $data['su_seq']         = $site_url_db->addUpdateRecord($data);
        
        return $data;
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
        
        return $data;
    }
}
