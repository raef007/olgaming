<?php

class BannerController extends BaseController {

    public function showGetBanner()
	{
        $limit          = 3;
        $all_banners    = 0;
        $srv_resp       = new stdClass();
        $all_sites      = DB::table('SITE')->get();
        
        foreach($all_sites as $site) {
            $banners = DB::table('BANNER')
                ->where('site_id', $site->site_id)
                ->join('MANAGER', 'MANAGER.admin_id', '=', 'BANNER.admin_id')
                ->get();
            
            $site->url_count    = count($banners);
            $site->offset       = 0;
            $site->limit        = $limit;
            $site->max_page     = floor($site->url_count / $site->limit);
           
            $all_banners        += $site->url_count;
           
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
        
        $srv_resp->sites        = $all_sites;
        $srv_resp->url_count    = $all_banners;
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
    
    public function addSaveBanner()
    {
        $banner_db   = new Banner();
        
        $err_msg    = array();
        $data       = array();
        $srv_resp   = new stdClass();
        $post_data  = Input::all();
        
        $data['b_seq']              = $post_data['b_seq'];
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
        if (isset($post_data['img_path'])) {
            $data['img_path']       = $post_data['img_path'];
        }
        else {
            $data['img_path']       = 'default.jpg';
        }
        
        $errors_found   = $this->validateBanners($data);
        
        if (0 >= count($errors_found)) {
            $banner_db->addUpdateRecord($data);
        }
        else {
            $err_msg[] = $errors_found;
        }
        
        $srv_resp   = $this->showGetBanner();
        
        $json_data          = json_decode($srv_resp);
        $json_data->errors  = $err_msg;
        
        return json_encode($json_data);
    }
    
    public function addSaveBanners()
    {
        $banner_db   = new Banner();
        
        $bannertyp      = array('mains', 'subbanners', 'casinos', 'betslips', 'ptcnvs', 'mbwebs');
        $err_msg        = array();
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
                                $errors_found   = $this->validateBanners($banner);
                                if (0 >= count($errors_found)) {
                                    $banner_db->addUpdateRecord($banner);
                                }
                                 else {
                                    $err_msg[] = $errors_found;
                                }
                            }
                        }
                    }
                }
            }
        }

        $srv_resp   = $this->showGetBanner();
        
        $json_data          = json_decode($srv_resp);
        $json_data->errors  = $err_msg;
        
        return json_encode($json_data);
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
        $srv_resp['file_name']  = $filename;
        
        return $srv_resp;
    }
    
    private function validateBanners($data)
    {
        $messages   = array();                      /* Validation Messages according to rules   */
        $rules      = array();                      /* Validation Rules                         */
        $errors     = array();
        
        $messages   = array(
            'subject.required'      => '제목  is required',
            'start_date.required'   => '기간  is required',
            'end_date.required'     => '부터  is required',
            'ink_target.required'   => '링크타겟  is required',
            'ordering.required'     => '순서 is required',
            'show_flag.required'    => '노출여부 is required',
        );
        
        $rules      = array(
            'b_seq'             => 'required|numeric',
            'site_id'           => 'required|numeric',
            'admin_id'          => 'required',
            'subject'           => 'required',
            'start_date'        => 'required',
            'end_date'          => 'required',
            'sort_of_banner'    => 'required|numeric',
            'show_flag'         => 'required|boolean',
            'ordering'          => 'required',
            'ink_target'        => 'required|numeric',
        );
        
        /*  Run the Laravel Validation  */
		$validator = Validator::make($data, $rules, $messages);
        
        if ($validator->fails()) {
            $errors   = $validator->messages()->all();
        }
        
        return $errors;
    }
    
}