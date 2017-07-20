<?php
class NoticeController extends BaseController {

    public function searchNotice()
    {
        $all_ok_count   = 0;
        $all_ng_count   = 0;
        $limit          = 3;
        
        $post_data  = Input::all();
        
        $all_sites  = DB::table('SITE')->get();
        
        foreach($all_sites as $site) {
            $ok_query   = DB::table('NOTICE')
                ->where('NOTICE.site_id', $site->site_id)
                ->join('MANAGER', 'MANAGER.admin_id', '=', 'NOTICE.admin_id');
            
            if ('' != $post_data['from']) {
                $ok_query->where('NOTICE.reg_date', '>=', $post_data['from']);
            }
                
            if ('' != $post_data['to']) {
                $ok_query->where('NOTICE.reg_date', '<=', $post_data['to']);
            }
            
            if ((isset($post_data['filter_by']))
            && (isset($post_data['filter_val']))) {
                if (('' != $post_data['filter_by'])
                && ('' != $post_data['filter_val'])) {
                    
                    if ('IP' != $post_data['filter_by']) {
                        $ok_query->where('MANAGER.'.$post_data['filter_by'], 'like', '%'.$post_data['filter_val'].'%');
                    }
                    else {
                        $ok_query->where($post_data['filter_by'], 'like', '%'.$post_data['filter_val'].'%');
                    }
                }
            }            
            $site->ok_logs      = $ok_query->get();
            $site->ok_count     = count($site->ok_logs);
            $site->ok_offset    = 0;
            $site->ok_limit     = $limit;
            $site->ok_max       = floor($site->ok_count / $site->ok_limit);
            
            $all_ng_count       += $site->ok_count;            
            if (0 == ($site->ok_count % $site->ok_limit)) {
                $site->ok_max     = $site->ok_max - 1;
            }            
            for ($count = 0; $count <= $site->ok_max; $count++) {
                $site->ok_pages[]  = $count;
            }            
            $ng_query   = DB::table('EVENT')
                ->where('EVENT.site_id', $site->site_id)
                ->join('MANAGER', 'MANAGER.admin_id', '=', 'EVENT.admin_id');
            
            if ('' != $post_data['from']) {
                $ng_query->where('EVENT.reg_date', '>=', $post_data['from']);
            }
                
            if ('' != $post_data['to']) {
                $ng_query->where('EVENT.reg_date', '<=', $post_data['to']);
            }
            
            if ((isset($post_data['filter_by']))
            && (isset($post_data['filter_val']))) {
                if (('' != $post_data['filter_by'])
                && ('' != $post_data['filter_val'])) {
                    
                    if ('IP' != $post_data['filter_by']) {
                        $ng_query->where('MANAGER.'.$post_data['filter_by'], 'like', '%'.$post_data['filter_val'].'%');
                    }
                    else {
                        $ng_query->where($post_data['filter_by'], 'like', '%'.$post_data['filter_val'].'%');
                    }
                }
            }
            
            $site->ng_logs      = $ng_query->get();
            $site->ng_count     = count($site->ng_logs);
            $site->ng_offset    = 0;
            $site->ng_limit     = $limit;
            $site->ng_max       = floor($site->ng_count / $site->ng_limit);
            
            $all_ng_count       += $site->ng_count;
            
            if (0 == ($site->ng_count % $site->ng_limit)) {
                $site->ng_max     = $site->ng_max - 1;
            }
            
            for ($count = 0; $count <= $site->ng_max; $count++) {
                $site->ng_pages[]  = $count;
            }
        }
        
        $page_info              = new stdClass();
        $page_info->ok_count    = count($all_ok_count);
        $page_info->ok_offset   = 0;
        $page_info->ok_limit    = $limit;
        $page_info->ok_max      = floor($page_info->ok_count / $page_info->ok_limit);
        
        if (0 == ($page_info->ok_count % $page_info->ok_limit)) {
            $page_info->ok_max    = $page_info->ok_max - 1;
        }
        
        for ($count = 0; $count <= $page_info->ok_max; $count++) {
            $page_info->ok_pages[]  = $count;
        }
        
        $page_info->ng_count    = count($all_ng_count);
        $page_info->ng_offset   = 0;
        $page_info->ng_limit    = $limit;
        $page_info->ng_max      = floor($page_info->ng_count / $page_info->ng_limit);
        
        if (0 == ($page_info->ng_count % $page_info->ng_limit)) {
            $page_info->ng_max    = $page_info->ng_max - 1;
        }
        
        for ($count = 0; $count <= $page_info->ng_max; $count++) {
            $page_info->ng_pages[]  = $count;
        }
        
        return json_encode([$all_sites, $page_info]);
    }
    }

 /*   public function searchNotice(){
        $all_count  = 0;
        $limit      = 3;
        
        $post_data  = Input::all();
        
        $all_sites  = DB::table('SITE')->get();
        
            foreach($all_sites as $site) {
                $query  =  DB::table('NOTICE')
                ->select('*', 'NOTICE.reg_date')
                ->where('site_id', $site->site_id);
            
            if ('' != $post_data['from']) {
                $query->where('NOTICE.reg_date', '>=', $post_data['from']);
            }
                
            if ('' != $post_data['to']) {
                $query->where('NOTICE.reg_date', '<=', $post_data['to']);
            }
            if ((isset($post_data['filter_by']))
            && (isset($post_data['filter_val']))) {
                if (('' != $post_data['filter_by'])
                && ('' != $post_data['filter_val'])) {
                    
                    if ('subject' != $post_data['filter_by']) {
                        $query->where('NOTICE.'.$post_data['filter_by'], $post_data['filter_val']);
                    }
                    else {
                        $filter = $post_data['filter_by'];
                        $query->where($post_data['filter_by'], 'like', '%'.$post_data['filter_val'].'%');
                    }
                }
            }

            $site->subjects    = $query->get();
            $site->notice       = count($site->subjects);
            $site->offset       = 0;
            $site->limit        = $limit;
            $site->max_page     = floor($site->notice / $site->limit);
            
            $all_count          += $site->notice;
            
            if (0 == ($site->notice % $site->limit)) {
                $site->max_page     = $site->max_page - 1;
            }
            
            for ($count = 0; $count <= $site->max_page; $count++) {
                $site->pages[]  = $count;
            }
        }
        
        $page_info              = new stdClass();
        $page_info->notice   = $all_count;
        $page_info->offset      = 0;
        $page_info->limit       = $limit;
        $page_info->max_page    = floor($page_info->notice / $page_info->limit);
        
        if (0 == ($page_info->notice % $page_info->limit)) {
            $page_info->max_page    = $page_info->max_page - 1;
        }
        
        for ($count = 0; $count <= $page_info->max_page; $count++) {
            $page_info->pages[]  = $count;
        }
        
        return json_encode([$all_sites, $page_info]);
        }
    public function deleteNotice()
    {   

        $srv_resp       = new stdClass();
        $notice_db     = new Notice();
        $post_data     = Input::all();

        foreach ($post_data as $site) {
            foreach ($site['subjects'] as $subject) {
                if (isset($subject['notice_check'])) {
                    if ('1' == $subject['notice_check']) {
                        $notice_db->deleteRecord($subject['n_seq']);
                    }
                }
            }
        } 
        $srv_resp   = $this->showGetNotice();
        return $srv_resp;
    }
*/
?>
