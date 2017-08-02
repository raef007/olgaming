<?php
class NoticeController extends BaseController {

    public function showGetNotice()
    {
        
        $limit      = 5;
        $srv_resp   = new stdClass();
        $all_sites  = DB::table('SITE')->get();
        $all_count_notice  = 0;
        $all_count_event = 0;
        
        foreach($all_sites as $site) {
            $site->subjects = DB::table('NOTICE')
                ->where('site_id', $site->site_id)
                ->join('MANAGER', 'MANAGER.admin_id', '=', 'NOTICE.admin_id')
                ->get();
            
            $site->notice_count    = count($site->subjects);
            $site->notice_offset       = 0;
            $site->notice_limit        = $limit;
            $site->notice_max_page     = floor($site->notice_count / $site->notice_limit);
            
            $all_count_notice          += $site->notice_count;
            
            if (0 == ($site->notice_count % $site->notice_limit)) {
                $site->notice_max_page     = $site->notice_max_page - 1;
            }
            
            for ($count = 0; $count <= $site->notice_max_page; $count++) {
                $site->notice_pages[]  = $count;
            }

            $site->titles = DB::table('Event')
                ->where('site_id', $site->site_id)
                ->join('MANAGER', 'MANAGER.admin_id', '=', 'Event.admin_id')
                ->get();
            
            $site->event_count    = count($site->titles);
            $site->event_offset       = 0;
            $site->event_limit        = $limit;
            $site->event_max_page     = floor($site->event_count / $site->event_limit);
            
            $all_count_event          += $site->event_count;
            
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
        $srv_resp->event_count       = $all_count_event;
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

    public function searchNotice(){
        
        $post_data      = Input::all();
        $limit      = 5;
        $srv_resp   = new stdClass();
        $all_sites  = DB::table('SITE')->get();
        $all_count_event = 0;
        $all_count_notice  = 0;
        
        foreach($all_sites as $site) {
            $site->subjects = DB::table('NOTICE')
                ->where('site_id', $site->site_id)
                ->join('MANAGER', 'MANAGER.admin_id', '=', 'NOTICE.admin_id')
                ->where('NOTICE.reg_date','=',$post_data['from'])
                ->where('NOTICE.update_date','=',$post_data['to'])
                ->get();
            
            $site->notice_count    = count($site->subjects);
            $site->notice_offset       = 0;
            $site->notice_limit        = $limit;
            $site->notice_max_page     = floor($site->notice_count / $site->notice_limit);
            
            $all_count_notice          += $site->notice_count;
            
            if (0 == ($site->notice_count % $site->notice_limit)) {
                $site->notice_max_page     = $site->notice_max_page - 1;
            }
            
            for ($count = 0; $count <= $site->notice_max_page; $count++) {
                $site->notice_pages[]  = $count;
            }

            $site->titles = DB::table('Event')
                ->where('site_id', $site->site_id)
                ->join('MANAGER', 'MANAGER.admin_id', '=', 'Event.admin_id')
                ->get();
            
            $site->event_count    = count($site->titles);
            $site->event_offset       = 0;
            $site->event_limit        = $limit;
            $site->event_max_page     = floor($site->event_count / $site->event_limit);
            
            $all_count_event          += $site->event_count;
            
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

   public function searchEvent(){

        $post_data      = Input::all();
        $limit      = 5;
        $srv_resp   = new stdClass();
        $all_sites  = DB::table('SITE')->get();
        $all_count_event = 0;
        $all_count_notice  = 0;

            foreach($all_sites as $site) {
            $site->titles = DB::table('Event')
                    ->where('site_id', $site->site_id)
                    ->join('MANAGER', 'MANAGER.admin_id', '=', 'Event.admin_id')
                    ->where('EVENT.start_date','=',$post_data['from'])
                    ->where('EVENT.end_date','=',$post_data['to'])
                    ->get();
            
                $site->event_count    = count($site->titles);
                $site->event_offset       = 0;
                $site->event_limit        = $limit;
                $site->event_max_page     = floor($site->event_count / $site->event_limit);
                
                $all_count_event          += $site->event_count;
            
                    if (0 == ($site->event_count % $site->event_limit)) {
                        $site->event_max_page     = $site->event_max_page - 1;
                    }
                    
                    for ($count = 0; $count <= $site->event_max_page; $count++) {
                        $site->event_pages[]  = $count;
                    }

                $site->subjects = DB::table('NOTICE')
                    ->where('site_id', $site->site_id)
                    ->join('MANAGER', 'MANAGER.admin_id', '=', 'NOTICE.admin_id')
                    ->get();
                
                $site->notice_count    = count($site->subjects);
                $site->notice_offset       = 0;
                $site->notice_limit        = $limit;
                $site->notice_max_page     = floor($site->notice_count / $site->notice_limit);
                
                $all_count_notice          += $site->notice_count;
            
                    if (0 == ($site->notice_count % $site->notice_limit)) {
                        $site->notice_max_page     = $site->notice_max_page - 1;
                    }
                    
                    for ($count = 0; $count <= $site->notice_max_page; $count++) {
                        $site->notice_pages[]  = $count;
                    }
    
            }
            $srv_resp->sites        = $all_sites;

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
        
        $srv_resp   = $this->showGetNotice();
        
        return $srv_resp;
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
        
        $srv_resp   = $this->showGetNotice();
        
        return $srv_resp;
    }
    public function addNotice() {
        $post_data  = Input::all();
        $err_msg        = array();

    $error_count    = $this->validateNotice($post_data);

        if (0 >= count($error_count)) {
        DB::table('NOTICE')
        ->insert(
            [
            'site_id' => $post_data['site_id'],
            'subject' => $post_data['subject'],
            'admin_id' => 'Admin1',
            'text' => $post_data['text'],
            'order' => $post_data['order'],
            'show_flag' => $post_data['show_flag']
            ]);
        }
        else {
            $err_msg[] = $error_count;
        }

    $srv_resp   = $this->showGetNotice();
    $json_data          = json_decode($srv_resp);
    $json_data->errors  = $err_msg;
        
    return json_encode($json_data);    }


    private function validateNotice($data)
    {
        $messages   = array();                      /* Validation Messages according to rules   */
        $rules      = array();                      /* Validation Rules                         */
        $errors     = array();
        
        $messages   = array(
            'site_id.required'        => 'Site ID is required',
            'subject.required'    => 'Subject is required',
            'text' => 'Please input text',
            'order.required'   => 'Order is required',
            'show_flag.required'   => 'Flag is required',
            'show_flag.numeric'   => 'Please choose between 노출 / 숨김',
        );
        
        $rules      = array(
            'site_id'         => 'required',
            'subject'     => 'required',
            'text'    => 'required',
            'order'    => 'required',
            'show_flag'    => 'required|numeric',

        );
        
        /*  Run the Laravel Validation  */
        $validator = Validator::make($data, $rules, $messages);
        
        if ($validator->fails()) {
            $errors   = $validator->messages()->all();
        }
        
        return $errors;
    }


    public function addEvent() {
        $post_data  = Input::all();
        $err_msg        = array();

    $error_count    = $this->validateNotice($post_data);

        if (0 >= count($error_count)) {
        DB::table('EVENT')
        ->insert(
            [
            'site_id' => $post_data['site_id'],
            'subject' => $post_data['subject'],
            'admin_id' => 'Admin1',
            'text' => $post_data['text'],
            'start_date' => $post_data['start_date'],
            'start_datetime' => $post_data['start_datetime'],
            'end_date' => $post_data['end_date'],
            'end_datetime' => $post_data['end_datetime'],
            'order' => $post_data['order'],
            'show_flag' => $post_data['show_flag']
            ]
            );
    }
        else {
            $err_msg[] = $error_count;
        }

    $srv_resp   = $this->showGetNotice();
    $json_data          = json_decode($srv_resp);
    $json_data->errors  = $err_msg;
        
    return json_encode($json_data);    }

    private function validateEvent($data)
    {
        $messages   = array();                      /* Validation Messages according to rules   */
        $rules      = array();                      /* Validation Rules                         */
        $errors     = array();
        
        $messages   = array(
            'site_id.required'        => 'Site ID is required',
            'subject.required'    => 'Subject is required',
            'text' => 'Please input text',
            'start_date' => 'Please enter date',
            'start_datetime' => 'Please enter date',
            'end_date' => 'Please enter date',
            'end_datetime' => 'Please enter date',
            'order.required'   => 'Order is required',
            'show_flag.required'   => 'Flag is required',
            'show_flag.numeric'   => 'Please choose between 노출 / 숨김',
        );
        
        $rules      = array(
            'site_id'         => 'required',
            'subject'     => 'required',
            'text'    => 'required',
            'start_date'    => 'required',
            'start_datetime'    => 'required',
            'end_date'    => 'required',
            'end_datetime'    => 'required',
            'order'    => 'required',
            'show_flag'    => 'required|numeric',

        );
        
        /*  Run the Laravel Validation  */
        $validator = Validator::make($data, $rules, $messages);
        
        if ($validator->fails()) {
            $errors   = $validator->messages()->all();
        }
        
        return $errors;
    }

}