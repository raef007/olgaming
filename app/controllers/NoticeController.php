<?php
class NoticeController extends BaseController {

    public function showGetNotice()
    {
        $all_count_notice  = 0;
        $all_count_event = 0;
        $limit      = 5;
        $all_sites  = DB::table('SITE')->get();
        
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
        
        $page_info              = new stdClass();
        $page_info->notice_count   = $all_count_notice;
        $page_info->notice_offset      = 0;
        $page_info->notice_limit       = $limit;
        $page_info->notice_max_page    = floor($page_info->notice_count / $page_info->notice_limit);
        
        if (0 == ($page_info->notice_count % $page_info->notice_limit)) {
            $page_info->notice_max_page    = $page_info->notice_max_page - 1;
        }
        
        for ($count = 0; $count <= $page_info->notice_max_page; $count++) {
            $page_info->notice_pages[]  = $count;
        }
        $page_info->event_count   = $all_count_event;
        $page_info->event_offset      = 0;
        $page_info->event_limit       = $limit;
        $page_info->event_max_page    = floor($page_info->event_count / $page_info->event_limit);
        
        if (0 == ($page_info->event_count % $page_info->event_limit)) {
            $page_info->event_max_page    = $page_info->event_max_page - 1;
        }
        
        for ($count = 0; $count <= $page_info->event_max_page; $count++) {
            $page_info->event_pages[]  = $count;
        }
        
        return json_encode([$all_sites, $page_info]); 
    }

    public function searchNotice(){
        $all_count_notice  = 0;
        $all_count_event = 0;
        $limit      = 5;
        $post_data  = Input::all();
        $all_sites  = DB::table('SITE')->get();
        
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
        $page_info              = new stdClass();
        $page_info->notice_count   = $all_count_notice;
        $page_info->notice_offset      = 0;
        $page_info->notice_limit       = $limit;
        $page_info->notice_max_page    = floor($page_info->notice_count / $page_info->notice_limit);
        
        if (0 == ($page_info->notice_count % $page_info->notice_limit)) {
            $page_info->notice_max_page    = $page_info->notice_max_page - 1;
        }
        
        for ($count = 0; $count <= $page_info->notice_max_page; $count++) {
            $page_info->notice_pages[]  = $count;
        }
        $page_info->event_count   = $all_count_event;
        $page_info->event_offset      = 0;
        $page_info->event_limit       = $limit;
        $page_info->event_max_page    = floor($page_info->event_count / $page_info->event_limit);
        
        if (0 == ($page_info->event_count % $page_info->event_limit)) {
            $page_info->event_max_page    = $page_info->event_max_page - 1;
        }
        
        for ($count = 0; $count <= $page_info->event_max_page; $count++) {
            $page_info->event_pages[]  = $count;
        }
    return json_encode([$all_sites, $page_info]); 
    }

    public function searchEvent(){
        $all_count_notice  = 0;
        $all_count_event = 0;
        $limit      = 5;
        $post_data  = Input::all();
        $all_sites  = DB::table('SITE')->get();

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
            $page_info              = new stdClass();
            $page_info->event_count   = $all_count_event;
            $page_info->event_offset      = 0;
            $page_info->event_limit       = $limit;
            $page_info->event_max_page    = floor($page_info->event_count / $page_info->event_limit);
            
            if (0 == ($page_info->event_count % $page_info->event_limit)) {
                $page_info->event_max_page    = $page_info->event_max_page - 1;
            }
            
            for ($count = 0; $count <= $page_info->event_max_page; $count++) {
                $page_info->event_pages[]  = $count;
            }
            $page_info->notice_count   = $all_count_notice;
            $page_info->notice_offset      = 0;
            $page_info->notice_limit       = $limit;
            $page_info->notice_max_page    = floor($page_info->notice_count / $page_info->notice_limit);
            
            if (0 == ($page_info->notice_count % $page_info->notice_limit)) {
                $page_info->notice_max_page    = $page_info->notice_max_page - 1;
            }
            
            for ($count = 0; $count <= $page_info->notice_max_page; $count++) {
                $page_info->notice_pages[]  = $count;
            }
        return json_encode([$all_sites, $page_info]);
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
    
    public function deleteEvent() {
        $event_db       = new Event();
        
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
}