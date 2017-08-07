<?php
class NoticeController extends BaseController {

    public function searchNotice(){
        
        $post_data          = Input::all();
        $limit              = 5;
        $srv_resp           = new stdClass();
        $all_sites          = DB::table('SITE')->get();
        $all_count_event    = 0;
        $all_count_notice   = 0;
        
        foreach($all_sites as $site) {
            $notice_query = DB::table('NOTICE')
                ->where('site_id', $site->site_id)
                ->join('MANAGER', 'MANAGER.admin_id', '=', 'NOTICE.admin_id');
            
            if ('' != $post_data['from']) {
                $notice_query->where('NOTICE.reg_date', '>=', $post_data['from']);
            }
                
            if ('' != $post_data['to']) {
                $notice_query->where('NOTICE.reg_date', '<=', $post_data['to']);
            }
            
            if ((isset($post_data['filter_by']))
            && (isset($post_data['filter_val']))) {
                if (('' != $post_data['filter_by'])
                && ('' != $post_data['filter_val'])) {
                    $notice_query->where($post_data['filter_by'], 'like', '%'.$post_data['filter_val'].'%');
                }
            }
            
            $site->subjects         = $notice_query->get();
            $site->notice_count     = count($site->subjects);
            $site->notice_offset    = 0;
            $site->notice_limit     = $limit;
            $site->notice_max_page  = floor($site->notice_count / $site->notice_limit);
            
            $all_count_notice       += $site->notice_count;
            
            if (0 == ($site->notice_count % $site->notice_limit)) {
                $site->notice_max_page     = $site->notice_max_page - 1;
            }
            
            for ($count = 0; $count <= $site->notice_max_page; $count++) {
                $site->notice_pages[]  = $count;
            }

            $event_query = DB::table('EVENT')
                ->where('site_id', $site->site_id)
                ->join('MANAGER', 'MANAGER.admin_id', '=', 'EVENT.admin_id');
            
            if ('' != $post_data['from']) {
                $event_query->where('EVENT.reg_date', '>=', $post_data['from']);
            }
                
            if ('' != $post_data['to']) {
                $event_query->where('EVENT.reg_date', '<=', $post_data['to']);
            }
            
            if ((isset($post_data['filter_by']))
            && (isset($post_data['filter_val']))) {
                if (('' != $post_data['filter_by'])
                && ('' != $post_data['filter_val'])) {
                    $event_query->where($post_data['filter_by'], 'like', '%'.$post_data['filter_val'].'%');
                }
            }
            
            $site->titles           = $event_query->get();
            $site->event_count      = count($site->titles);
            $site->event_offset     = 0;
            $site->event_limit      = $limit;
            $site->event_max_page   = floor($site->event_count / $site->event_limit);
            
            $all_count_event        += $site->event_count;
            
            if (0 == ($site->event_count % $site->event_limit)) {
                $site->event_max_page     = $site->event_max_page - 1;
            }
            
            for ($count = 0; $count <= $site->event_max_page; $count++) {
                $site->event_pages[]  = $count;
            }

        }
        $srv_resp->sites        = $all_sites;

        $srv_resp->notice_count   = $all_count_notice;
        $srv_resp->notice_offset      = 0;
        $srv_resp->notice_limit       = $limit;
        $srv_resp->notice_max_page    = floor($srv_resp->notice_count / $srv_resp->notice_limit);
        
        if (0 == ($srv_resp->notice_count % $srv_resp->notice_limit)) {
            $srv_resp->notice_max_page    = $srv_resp->notice_max_page - 1;
        }
        
        for ($count = 0; $count <= $srv_resp->notice_max_page; $count++) {
            $srv_resp->notice_pages[]  = $count;
        }
        $srv_resp->event_count   = $all_count_event;
        $srv_resp->event_offset      = 0;
        $srv_resp->event_limit       = $limit;
        $srv_resp->event_max_page    = floor($srv_resp->event_count / $srv_resp->event_limit);
        
        if (0 == ($srv_resp->event_count % $srv_resp->event_limit)) {
            $srv_resp->event_max_page    = $srv_resp->event_max_page - 1;
        }
        
        for ($count = 0; $count <= $srv_resp->event_max_page; $count++) {
            $srv_resp->event_pages[]  = $count;
        }
        
        return json_encode($srv_resp); 
    }

    
    public function deleteNotice() {
        $notice_db      = new Notice();
        $srv_resp       = new stdClass();
        $post_data      = Input::all();
        
        foreach ($post_data as $site) {
            
            if (isset($site['subjects'])) {
                foreach ($site['subjects'] as $notice) {
                    if (isset($notice['notice_check'])) {
                        if ('1' == $notice['notice_check']) {
                            $notice_db->deleteRecord($notice['n_seq']);
                        }
                    }
                }
            }
        }
        
        return json_encode($srv_resp); 
    }
    
    public function deleteEvents() {
        $event_db       = new SiteEvent();
        
        $srv_resp       = new stdClass();
        $post_data      = Input::all();
        
        foreach ($post_data as $site) {
            
            if (isset($site['titles'])) {
                foreach ($site['titles'] as $event) {
                    if (isset($event['event_check'])) {
                        if ('1' == $event['event_check']) {
                            $event_db->deleteRecord($event['e_seq']);
                        }
                    }
                }
            }
        }
        
        return json_encode($srv_resp);
    }
    
    public function addNotice()
    {
        $post_data      = Input::all();
        
        $idx            = 1;
        $err_msg        = array();
        $err_obj        = new stdClass();
        
        $destination    = public_path('assets/images/notices');
        $img_path       = 'default.jpg';
        $new_notice     = json_decode($post_data['new_notice']);
        
        if (isset($post_data['notice_files0'])) {
            $post_file  = $post_data['notice_files0'];
            
            $ext        = $post_file->getClientOriginalExtension();
            $filename   = 'notice'.rand(11111,99999).time().'.'.$ext;
            
            $post_file->move($destination, $filename);
            
            $img_path       = $filename;
        }
        
        $data['site_id']        = $new_notice->site_id;
        $data['subject']        = $new_notice->subject;
        $data['text']           = $new_notice->text;
        $data['order']          = $new_notice->order;
        $data['show_flag']      = $new_notice->show_flag;
        
        $errors_found    = $this->validateNotice($data);

        if (0 >= count($errors_found)) {
            if (0 < $new_notice->n_seq) {
                $upd_data = array(
                    'site_id'           => $new_notice->site_id,
                    'subject'           => $new_notice->subject,
                    'admin_id'          => 'Admin1',
                    'text'              => $new_notice->text,
                    'order'             => $new_notice->order,
                    'show_flag'         => $new_notice->show_flag,
                    'update_date'       => date('Ymd'),
                );
                
                if ('default.jpg' != $img_path) {
                    $upd_data['img_path']   = $img_path;
                }
                
                DB::table('NOTICE')
                    ->where('n_seq', $new_notice->n_seq)
                    ->update($upd_data);
            }
            else {
                DB::table('NOTICE')
                    ->insert(
                        [
                            'site_id'           => $new_notice->site_id,
                            'subject'           => $new_notice->subject,
                            'admin_id'          => 'Admin1',
                            'text'              => $new_notice->text,
                            'order'             => $new_notice->order,
                            'show_flag'         => $new_notice->show_flag,
                            'img_path'          => $img_path,
                            'update_date'       => date('Ymd'),
                            'reg_date'          => date('Ymd')
                        ]
                    );
            }
        }
        else {
            $err_obj->msgs  = $errors_found;
            $err_obj->idx   = $idx;
            $err_msg[]      = $err_obj;
        }
        
        $idx++;
        
        return json_encode($err_msg);
    }


    private function validateNotice($data)
    {
        $messages   = array();                      /* Validation Messages according to rules   */
        $rules      = array();                      /* Validation Rules                         */
        $errors     = array();
        
        $messages   = array(
            'site_id.required'      => 'Site ID is required',
            'subject.required'      => 'Subject is required',
            'text'                  => 'Please input text',
            'order.required'        => 'Order is required',
            'show_flag.required'    => 'Flag is required',
            'show_flag.numeric'     => 'Please choose between 노출 / 숨김',
        );
        
        $rules      = array(
            'site_id'       => 'required',
            'subject'       => 'required',
            'text'          => 'required',
            'order'         => 'required',
            'show_flag'     => 'required|numeric',

        );
        
        /*  Run the Laravel Validation  */
        $validator = Validator::make($data, $rules, $messages);
        
        if ($validator->fails()) {
            $errors   = $validator->messages()->all();
        }
        
        return $errors;
    }


    public function addEvent()
    {
        $post_data      = Input::all();
        
        $idx            = 1;
        $err_msg        = array();
        $err_obj        = new stdClass();
        
        $destination    = public_path('assets/images/events');
        $img_path       = 'default.jpg';
        $new_event      = json_decode($post_data['new_event']);
        
        if (isset($post_data['event_files0'])) {
            $post_file  = $post_data['event_files0'];
            
            $ext        = $post_file->getClientOriginalExtension();
            $filename   = 'event'.rand(11111,99999).time().'.'.$ext;
            
            $post_file->move($destination, $filename);
            
            $img_path       = $filename;
        }
        
        $data['site_id']        = $new_event->site_id;
        $data['subject']        = $new_event->subject;
        $data['text']           = $new_event->text;
        $data['start_date']     = $new_event->start_date;
        $data['start_datetime'] = $new_event->start_datetime;
        $data['end_date']       = $new_event->end_date;
        $data['end_datetime']   = $new_event->end_datetime;
        $data['order']          = $new_event->order;
        $data['show_flag']      = $new_event->show_flag;
        
        $errors_found    = $this->validateEvent($data);

        if (0 >= count($errors_found)) {
            if (0 < $new_event->e_seq) {
                $upd_data = array(
                    'site_id'           => $new_event->site_id,
                    'subject'           => $new_event->subject,
                    'admin_id'          => 'Admin1',
                    'text'              => $new_event->text,
                    'start_date'        => $new_event->start_date,
                    'start_datetime'    => $new_event->start_datetime,
                    'end_date'          => $new_event->end_date,
                    'end_datetime'      => $new_event->end_datetime,
                    'order'             => $new_event->order,
                    'show_flag'         => $new_event->show_flag
                );
                
                if ('default.jpg' != $img_path) {
                    $upd_data['img_path']   = $img_path;
                }
                
                DB::table('EVENT')
                    ->where('e_seq', $new_event->e_seq)
                    ->update($upd_data);
            }
            else {
                DB::table('EVENT')
                    ->insert(
                        [
                            'site_id'           => $new_event->site_id,
                            'subject'           => $new_event->subject,
                            'admin_id'          => 'Admin1',
                            'text'              => $new_event->text,
                            'start_date'        => $new_event->start_date,
                            'start_datetime'    => $new_event->start_datetime,
                            'end_date'          => $new_event->end_date,
                            'end_datetime'      => $new_event->end_datetime,
                            'order'             => $new_event->order,
                            'show_flag'         => $new_event->show_flag,
                            'img_path'          => $img_path,
                            'reg_date'          => date('Ymd')
                        ]
                    );
            }
        }
        else {
            $err_obj->msgs  = $errors_found;
            $err_obj->idx   = $idx;
            $err_msg[]      = $err_obj;
        }
        
        $idx++;
        
        return json_encode($err_msg);
    }

    private function validateEvent($data)
    {
        $messages   = array();                      /* Validation Messages according to rules   */
        $rules      = array();                      /* Validation Rules                         */
        $errors     = array();
        
        $messages   = array(
            'site_id.required'      => 'Site ID is required',
            'subject.required'      => 'Subject is required',
            'text'                  => 'Please input text',
            'start_date'            => 'Please enter date',
            'start_datetime'        => 'Please enter date',
            'end_date'              => 'Please enter date',
            'end_datetime'          => 'Please enter date',
            'order.required'        => 'Order is required',
            'show_flag.required'    => 'Flag is required',
            'show_flag.numeric'     => 'Please choose between 노출 / 숨김',
        );
        
        $rules      = array(
            'site_id'           => 'required',
            'subject'           => 'required',
            'text'              => 'required',
            'start_date'        => 'required',
            'start_datetime'    => 'required',
            'end_date'          => 'required',
            'end_datetime'      => 'required',
            'order'             => 'required',
            'show_flag'         => 'required|numeric',
        );
        
        /*  Run the Laravel Validation  */
        $validator = Validator::make($data, $rules, $messages);
        
        if ($validator->fails()) {
            $errors   = $validator->messages()->all();
        }
        
        return $errors;
    }

}