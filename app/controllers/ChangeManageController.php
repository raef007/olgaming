<?php

class ChangeManageController extends BaseController {
    
    public function searchChargeMng()
    {
        $all_count  = 0;
        $limit      = 3;
        $srv_resp   = new stdClass();
        
        $post_data  = Input::all();
        
        $all_sites  = DB::table('SITE')->get();
        
        foreach($all_sites as $site) {
            $query  = DB::table('DEPOSIT')
                ->where('site_id', $site->site_id);
            
            if ('' != $post_data['from']) {
                $query->where('reg_date', '>=', $post_data['from']);
            }
                
            if ('' != $post_data['to']) {
                $query->where('reg_date', '<=', $post_data['to']);
            }
            
            if (isset($post_data['filter_val'])) {
                if ('' != $post_data['filter_val']) {
                    $query->where('telephone', 'like', '%'.$post_data['filter_val'].'%');
                }
            }
            
            $deposits           = $query->get();
            $all_count          += count($deposits);
            
            $site->requests     = array();
            $site->standbys     = array();
            $site->completeds   = array();
            
            foreach ($deposits as $deposit) {
                
                if ('' != $deposit->finish_date) {
                    $site->completeds[] = $deposit;
                }
                else if ('' != $deposit->wait_date) {
                    $site->standbys[]   = $deposit;
                }
                else {
                    $site->requests[]   = $deposit;
                }
            }
            
            $site->limit        = $limit;
            
            $site->req_count    = count($site->requests);
            $site->wait_count   = count($site->standbys);
            $site->done_count   = count($site->completeds);
            
            $site->req_offset   = 0;
            $site->wait_offset  = 0;
            $site->done_offset  = 0;
            
            $site->req_offset   = 0;
            $site->wait_offset  = 0;
            $site->done_offset  = 0;
            
            $site->req_max      = floor($site->req_count / $site->limit);
            $site->wait_max     = floor($site->wait_count / $site->limit);
            $site->done_max     = floor($site->done_count / $site->limit);
            
            if (0 == ($site->req_count % $site->limit)) {
                $site->req_max     = $site->req_max - 1;
            }
            
            if (0 == ($site->wait_count % $site->limit)) {
                $site->wait_max     = $site->wait_max - 1;
            }
            
            if (0 == ($site->done_count % $site->limit)) {
                $site->done_max     = $site->done_max - 1;
            }
            
            for ($count = 0; $count <= $site->req_max; $count++) {
                $site->req_pages[]  = $count;
            }
            
            for ($count = 0; $count <= $site->wait_max; $count++) {
                $site->wait_pages[]  = $count;
            }
            
            for ($count = 0; $count <= $site->done_max; $count++) {
                $site->done_pages[]  = $count;
            }
        }
        
        $srv_resp->sites        = $all_sites;
        $srv_resp->url_count    = $all_count;
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
    
}