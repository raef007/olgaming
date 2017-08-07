<?php

class PopupController extends BaseController {

    public function showGetPopup()
	{
        $limit      = 3;
        $all_popups = 0;
        $srv_resp   = new stdClass();
        $all_sites  = DB::table('SITE')->get();
        
        foreach($all_sites as $site) {
            $popups = DB::table('POPUP')
                ->where('site_id', $site->site_id)
                ->get();
            
            $site->url_count    = count($popups);
            $site->offset       = 0;
            $site->limit        = $limit;
            $site->max_page     = floor($site->url_count / $site->limit);
            
            $all_popups         += $site->url_count;
            
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
        
        $srv_resp->sites        = $all_sites;
        $srv_resp->url_count    = $all_popups;
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
    
    public function addSavePopup()
    {
        $popup_db   = new Popup();
        
        $idx        = 1;
        $err_msg    = array();
        $err_obj    = new stdClass();
        
        $data       = array();
        $srv_resp   = new stdClass();
        $post_data  = Input::all();
        
        $data['p_seq']              = $post_data['p_seq'];
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
        if (isset($post_data['image'])) {
            $data['img_path']       = $post_data['image'];
        }
        else {
            $data['img_path']       = 'default.jpg';
        }
        
        $errors_found   = $this->validatePopups($data);
        
        if (0 >= count($errors_found)) {
            $popup_db->addUpdateRecord($data);
        }
        else {
            $err_obj->msgs  = $errors_found;
            $err_obj->idx   = $idx;
            $err_msg[]      = $err_obj;
        }
        
        $idx++;
        
        $srv_resp   = $this->showGetPopup();
        
        $json_data          = json_decode($srv_resp);
        $json_data->errors  = $err_msg;
        
        return json_encode($json_data);
    }
    
    public function addSavePopups()
    {
        $popup_db       = new Popup();
        
        $poptyp         = array('popups', 'submenus', 'mbwebs');
        
        $idx            = 1;
        $err_msg        = array();
        $err_obj        = new stdClass();
        
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
                                $errors_found   = $this->validatePopups($popup);
                                if (0 >= count($errors_found)) {
                                    $popup_db->addUpdateRecord($popup);
                                }
                                 else {
                                    $err_obj->msgs  = $errors_found;
                                    $err_obj->idx   = $idx;
                                    $err_msg[]      = $err_obj;
                                }
                            }
                        }
                        
                        $idx++;
                    }
                }
            }
        }

        $srv_resp   = $this->showGetPopup();
        
        $json_data          = json_decode($srv_resp);
        $json_data->errors  = $err_msg;
        
        return json_encode($json_data);
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
        $srv_resp['filename']   = $filename;
        
        return $srv_resp;
    }
    
    private function validatePopups($data)
    {
        $messages   = array();                      /* Validation Messages according to rules   */
        $rules      = array();                      /* Validation Rules                         */
        $errors     = array();
        
        $messages   = array(
            'subject.required'      => '제목 is required',
            'size_width.required'   => '가로 is required',
            'size_width.numeric'    => '가로 must be a numeric',
            'size_height.required'  => '세로 is required',
            'size_height.numeric'   => '세로 must be a numeric',
            'x_position.required'   => '상단 is required',
            'x_position.numeric'    => '상단 must be a numeric',
            'y_position.required'   => '좌측 is required',
            'y_position.numeric'    => '좌측 must be a numeric',
            
            'start_date.required'   => '기간 is required',
            'end_date.required'     => '부터 is required',
            
            'scrool_flag.required'  => '스크롤바 is required',
            'sort_machine.required' => '기기선택  is required',
            'sort_popup.required'   => '팝업종류  is required',
            'show_flag.required'    => '노출여부 is required',
            'ordering.required'     => '순서 is required',
            
            'link_target_code.required' => '링크타겟 is required',
            'link_address.required'     => '링크주소 is required',
            'link_address.url'          => '링크주소 must be in URL format (http://url.com)',
        );
        
        $rules      = array(
            'p_seq'             => 'required|numeric',
            'site_id'           => 'required|numeric',
            
            'subject'           => 'required',
            'size_width'        => 'required|numeric',
            'size_height'       => 'required|numeric',
            'x_position'        => 'required|numeric',
            'y_position'        => 'required|numeric',
            
            'start_date'        => 'required',
            'end_date'          => 'required',
            
            'scrool_flag'       => 'required|numeric',
            'sort_machine'      => 'required|numeric',
            'sort_popup'        => 'required|numeric',
            'show_flag'         => 'required|boolean',
            'ordering'          => 'required',
            'link_target_code'  => 'required|numeric',
            'link_address'      => 'required|url',
            
            'img_path'          => 'required',
        );
        
        /*  Run the Laravel Validation  */
		$validator = Validator::make($data, $rules, $messages);
        
        if ($validator->fails()) {
            $errors   = $validator->messages()->all();
        }
        
        return $errors;
    }
}