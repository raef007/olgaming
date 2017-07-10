<?php

class PopupController extends BaseController {

    public function showGetPopup()
	{
        $limit      = 3;
        $all_sites  = DB::table('SITE')->get();
        
        foreach($all_sites as $site) {
            $popups = DB::table('POPUP')
                ->where('site_id', $site->site_id)
                ->get();
            
            $site->url_count    = count($popups);
            $site->offset       = 0;
            $site->limit        = $limit;
            $site->max_page     = floor($site->url_count / $site->limit);
            
            foreach ($popups as $popup) {
                switch ($popup->sort_popup) {
                    case 0:
                        $site->popups[]     = $popup;
                        break;
                    
                    case 1:
                        $site->submenus[]   = $popup;
                        break;
                        
                    case 2:
                        $site->mbwebs[]     = $popup;
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
    
    public function addSavePopup()
    {
        $popup_db   = new Popup();
        
        $data       = array();
        $srv_resp   = new stdClass();
        $post_data  = Input::all();
        
        $data['p_seq']              = 0;
        $data['site_id']            = $post_data['site_id'];
        $data['subject']            = $post_data['subject'];
        $data['size_width']         = $post_data['size_width'];
        $data['size_height']        = $post_data['size_height'];
        $data['x_position']         = $post_data['x_position'];
        $data['y_position']         = $post_data['y_position'];
        $data['start_date']         = $post_data['start_date'];
        $data['start_datetime']     = $post_data['start_datetime'];
        $data['end_date']           = $post_data['end_date'];
        $data['end_datetime']       = $post_data['end_datetime'];
        $data['scrool_flag']        = $post_data['scrool_flag'];
        $data['sort_machine']       = $post_data['sort_machine'];
        $data['sort_popup']         = $post_data['sort_popup'];
        $data['show_flag']          = $post_data['show_flag'];
        $data['ordering']           = $post_data['ordering'];
        $data['link_target_code']   = $post_data['link_target_code'];
        $data['link_address']       = $post_data['link_address'];
        $data['text']               = $post_data['text'];
        $data['img_path']           = $post_data['image'];
        
        $popup_db->addUpdateRecord($data);
        
        $srv_resp   = $this->showGetPopup();
        
        return $srv_resp;
    }
    
    public function addSavePopups()
    {
        $popup_db       = new Popup();
        
        $poptyp         = array('popups', 'submenus', 'mbwebs');
        $data           = array();
        $srv_resp       = new stdClass();
        $post_data      = Input::all();
        
        foreach ($post_data as $site) {
            
            $data['site_id']    = $site['site_id'];
            
            for ($ctr = 0; $ctr < 3; $ctr++) {
                
                if (isset($site[$poptyp[$ctr]])) {
                    foreach ($site[$poptyp[$ctr]] as $popup) {
                        if (isset($popup['pop_check'])) {
                            if ('1' == $popup['pop_check']) {
                                $data['p_seq']              = $popup['p_seq'];
                                $data['site_id']            = $popup['site_id'];
                                $data['subject']            = $popup['subject'];
                                $data['size_width']         = $popup['size_width'];
                                $data['size_height']        = $popup['size_height'];
                                $data['x_position']         = $popup['x_position'];
                                $data['y_position']         = $popup['y_position'];
                                $data['start_date']         = $popup['start_date'];
                                $data['start_datetime']     = $popup['start_datetime'];
                                $data['end_date']           = $popup['end_date'];
                                $data['end_datetime']       = $popup['end_datetime'];
                                $data['scrool_flag']        = $popup['scrool_flag'];
                                $data['sort_machine']       = $popup['sort_machine'];
                                $data['sort_popup']         = $popup['sort_popup'];
                                $data['show_flag']          = $popup['show_flag'];
                                $data['ordering']           = $popup['ordering'];
                                $data['link_target_code']   = $popup['link_target_code'];
                                $data['link_address']       = $popup['link_address'];
                                $data['text']               = $popup['text'];
                                //$data['img_path']           = $popup['img_path'];
                                
                                $popup_db->addUpdateRecord($data);
                            }
                        }
                    }
                }
            }
        }

        $srv_resp   = $this->showGetPopup();
        
        return $srv_resp;
    }
    
    public function deletePopups()
    {
        $poptyp         = array('popups', 'submenus', 'mbwebs');
        
        $srv_resp       = new stdClass();
        $popup_db       = new Popup();
        
        $post_data      = Input::all();
        
        foreach ($post_data as $site) {
            
            for ($ctr = 0; $ctr < 3; $ctr++) {
                
                if (isset($site[$poptyp[$ctr]])) {
                    foreach ($site[$poptyp[$ctr]] as $popup) {
                        if (isset($popup['pop_check'])) {
                            if ('1' == $popup['pop_check']) {
                                $popup_db->deleteRecord($popup['p_seq']);
                            }
                        }
                    }
                }
            }
        }
        
        $srv_resp   = $this->showGetPopup();
        
        return $srv_resp;
    }
    
    public function uploadImage()
    {
        $popup_db       = new Popup();
        $post_file      = Input::file('popup-file');
        $destination    = public_path('assets/images/popups');
        
        $ext            = $post_file->getClientOriginalExtension();
        
        $filename       = 'popup'.rand(11111,99999).time().'.'.$ext;
        $post_file->move($destination, $filename);
        
        //$popup_db->update_image($site_id, $filename);
        
        $srv_resp['location']   = URL::asset('assets/images/popups/'.$filename);
        
        return $srv_resp;
    }
}