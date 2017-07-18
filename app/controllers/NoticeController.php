<?php
class NoticeController extends BaseController {
    public function showGetNotice() {
        $all_count  = 0;
        $limit      = 3;
        $all_sites  = DB::table('SITE')->get();

    foreach($all_sites as $site) {
            $site->subjects = DB::table('NOTICE')
                ->where('site_id', $site->site_id)
                ->join('MANAGER', 'MANAGER.admin_id', '=', 'NOTICE.admin_id')
                ->get();
            
            $site->notice    = count($site->subjects);
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


    public function searchNotice(){
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

}
?>
