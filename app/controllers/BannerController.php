<?php

class BannerController extends BaseController {

    public function showGetBanner()
	{
        $limit      = 3;
        $all_sites  = DB::table('SITE')->get();
        
        foreach($all_sites as $site) {
            $banners = DB::table('BANNER')
                ->where('site_id', $site->site_id)
                ->join('MANAGER', 'MANAGER.admin_id', '=', 'BANNER.admin_id')
                ->get();
            
            $site->url_count    = count($banners);
            $site->offset       = 0;
            $site->limit        = $limit;
            $site->max_page     = floor($site->url_count / $site->limit);
            
            foreach ($banners as $banner) {
                switch ($banner->sort_of_banner) {
                    case 0:
                        $site->mains[]      = $banner;
                        break;
                    
                    case 1:
                        $site->subbanners[] = $banner;
                        break;
                        
                    case 2:
                        $site->casinos[]    = $banner;
                        break;
                        
                    case 3:
                        $site->betslips[]   = $banner;
                        break;
                        
                    case 4:
                        $site->ptcnvs[]     = $banner;
                        break;
                        
                    case 5:
                        $site->mbwebs[]     = $banner;
                        break;
                }
            }
            
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
    
    public function addSaveBanner()
    {
        $banner_db   = new Banner();
        
        $data       = array();
        $srv_resp   = new stdClass();
        $post_data  = Input::all();
        
        $data['b_seq']              = 0;
        $data['site_id']            = $post_data['site_id'];
        $data['admin_id']           = 'Admin1';
        $data['subject']            = $post_data['subject'];
        $data['start_date']         = $post_data['start_date'];
        //$data['start_datetime']     = $post_data['start_datetime'];
        $data['end_date']           = $post_data['end_date'];
        //$data['end_datetime']       = $post_data['end_datetime'];
        $data['sort_of_banner']     = $post_data['sort_of_banner'];
        $data['show_flag']          = $post_data['show_flag'];
        $data['ordering']           = $post_data['ordering'];
        $data['ink_target']         = $post_data['ink_target'];
        //$data['text']               = $post_data['text'];
        $data['img_path']           = $post_data['img_path'];
        
        $banner_db->addUpdateRecord($data);
        
        $srv_resp   = $this->showGetBanner();
        
        return $srv_resp;
    }
    
    public function addSaveBanners()
    {
        $banner_db   = new Banner();
        
        $bannertyp      = array('mains', 'subbanners', 'casinos', 'betslips', 'ptcnvs', 'mbwebs');
        $data           = array();
        $srv_resp       = new stdClass();
        $post_data      = Input::all();
        
        foreach ($post_data as $site) {
            
            $data['site_id']    = $site['site_id'];
            
            for ($ctr = 0; $ctr < 6; $ctr++) {
                
                if (isset($site[$bannertyp[$ctr]])) {
                    foreach ($site[$bannertyp[$ctr]] as $banner) {
                        if (isset($banner['banner_check'])) {
                            if ('1' == $banner['banner_check']) {
                                $data['b_seq']              = $banner['b_seq'];;
                                $data['admin_id']           = 'Admin1';
                                $data['subject']            = $banner['subject'];
                                $data['start_date']         = $banner['start_date'];
                                //$data['start_datetime']     = $post_data['start_datetime'];
                                $data['end_date']           = $banner['end_date'];
                                //$data['end_datetime']       = $post_data['end_datetime'];
                                $data['sort_of_banner']     = $banner['sort_of_banner'];
                                $data['show_flag']          = $banner['show_flag'];
                                $data['ordering']           = $banner['ordering'];
                                $data['ink_target']         = $banner['ink_target'];
                                //$data['text']               = $post_data['text'];
                                //$data['img_path']           = $banner['img_path'];
                                
                                $banner_db->addUpdateRecord($data);
                            }
                        }
                    }
                }
            }
        }

        $srv_resp   = $this->showGetBanner();
        
        return $srv_resp;
    }
    
    public function deleteBanners()
    {
        $banner_db   = new Banner();
        
        $bannertyp      = array('mains', 'subbanners', 'casinos', 'betslips', 'ptcnvs', 'mbwebs');
        
        $srv_resp       = new stdClass();
        $post_data      = Input::all();
        
        foreach ($post_data as $site) {
            
            for ($ctr = 0; $ctr < 3; $ctr++) {
                
                if (isset($site[$bannertyp[$ctr]])) {
                    foreach ($site[$bannertyp[$ctr]] as $banner) {
                        if (isset($banner['banner_check'])) {
                            if ('1' == $banner['banner_check']) {
                                $banner_db->deleteRecord($banner['b_seq']);
                            }
                        }
                    }
                }
            }
        }
        
        $srv_resp   = $this->showGetBanner();
        
        return $srv_resp;
    }
    
    public function uploadBanner()
    {
        $banner_db      = new Banner();
        $post_file      = Input::file('banner-file');
        $destination    = public_path('assets/images/banners');
        
        $ext            = $post_file->getClientOriginalExtension();
        
        $filename       = 'banner'.rand(11111,99999).time().'.'.$ext;
        $post_file->move($destination, $filename);
        
        //$popup_db->update_image($site_id, $filename);
        
        $srv_resp['location']   = URL::asset('assets/images/banners/'.$filename);
        
        return $srv_resp;
    }
    
}