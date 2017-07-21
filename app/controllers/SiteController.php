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
        
        $srv_resp   = [$all_sites, $page_info];
        return json_encode([$all_sites, $page_info]);
	}
    
    public function addSaveSites()
    {
        $site_db        = new Site();
        $site_url_db    = new SiteUrl();
        $post_data      = Input::all();
        
        foreach ($post_data as $site) {
            
            $data['site_id']        = $site['site_id'];
            $data['site_name']      = $site['site_name'];
            $data['reg_way']        = $site['reg_way'];
            
            $site_id                = $site_db->addUpdateRecord($data);
            
            foreach ($site['site_urls'] as $url) {
                
                $data['site_id']        = $site_id;
                $data['su_seq']         = $url['su_seq'];
                $data['site_url']       = $url['site_url'];
                $data['page_of_manage'] = '';
                
                $site_url_id            = $site_url_db->addUpdateRecord($data);
            }
        }
        
        $data = $this->showGetSites();
        
        return $data;
    }
    
    public function addSaveUrl()
    {
        $site_db        = new Site();
        $site_url_db    = new SiteUrl();
        $post_data      = Input::all();
        
        $data['su_seq']         = '0';
        $data['site_id']        = $post_data['site_id'];
        $data['site_url']       = $post_data['site_url'];
        $data['page_of_manage'] = $post_data['page_of_manage'];
        
        $data['su_seq']         = $site_url_db->addUpdateRecord($data);
        
        $data = $this->showGetSites();
        
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
        
        $data = $this->showGetSites();
        
        return $data;
    }
}
