<?php

class ChangeManageController extends BaseController {
    
    public function searchChargeMng()
    {
        $all_req_count      = 0;
        $all_wait_count     = 0;
        $all_done_count     = 0;
        $limit              = 3;
        $srv_resp           = new stdClass();
        
        $post_data  = Input::all();
        
        $all_sites  = DB::table('SITE')->get();
        
        foreach($all_sites as $site) {
            $query  = DB::table('DEPOSIT')
                ->select('*', 'DEPOSIT.reg_date', 'DEPOSIT.money')
                ->where('DEPOSIT.site_id', $site->site_id)
                ->join('MEMBER', 'member.user_id', '=', 'DEPOSIT.user_id');
                
            if ('' != $post_data['from']) {
                $query->where('DEPOSIT.reg_date', '>=', $post_data['from']);
            }
                
            if ('' != $post_data['to']) {
                $query->where('DEPOSIT.reg_date', '<=', $post_data['to']);
            }
            
            if (isset($post_data['deposit_level'])) {
                $query->where('MEMBER.deposit_level', '=', $post_data['deposit_level']);
            }
            
            if ((isset($post_data['filter_by']))
            && (isset($post_data['filter_val']))) {
                if (('' != $post_data['filter_val'])
                && ('' != $post_data['filter_val'])) {
                    $query->where($post_data['filter_by'], 'like', '%'.$post_data['filter_val'].'%');
                }
            }
            
            $deposits           = $query->get();
            
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
            
            $all_req_count      += $site->req_count;
            $all_wait_count     += $site->wait_count;
            $all_done_count     += $site->done_count;
            
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
        
        $srv_resp->limit        = $limit;
        
        $srv_resp->req_count    = $all_req_count;
        $srv_resp->wait_count   = $all_wait_count;
        $srv_resp->done_count   = $all_done_count;
        
        $srv_resp->req_offset   = 0;
        $srv_resp->wait_offset  = 0;
        $srv_resp->done_offset  = 0;
        
        $srv_resp->req_max      = floor($srv_resp->req_count / $srv_resp->limit);
        $srv_resp->wait_max     = floor($srv_resp->wait_count / $srv_resp->limit);
        $srv_resp->done_max     = floor($srv_resp->done_count / $srv_resp->limit);
        
        if (0 == ($srv_resp->req_count % $site->limit)) {
            $srv_resp->req_max     = $srv_resp->req_max - 1;
        }
        
        if (0 == ($srv_resp->wait_count % $srv_resp->limit)) {
            $srv_resp->wait_max     = $srv_resp->wait_max - 1;
        }
        
        if (0 == ($srv_resp->done_count % $srv_resp->limit)) {
            $srv_resp->done_max     = $srv_resp->done_max - 1;
        }
        
        for ($count = 0; $count <= $srv_resp->req_max; $count++) {
            $srv_resp->req_pages[]  = $count;
        }
        
        for ($count = 0; $count <= $srv_resp->wait_max; $count++) {
            $srv_resp->wait_pages[]  = $count;
        }
        
        for ($count = 0; $count <= $srv_resp->done_max; $count++) {
            $srv_resp->done_pages[]  = $count;
        }
        
        return json_encode($srv_resp);
    }
    
    public function cancelDeposit($step_list)
    {
        $deposit_db       = new Deposit();
        
        $srv_resp       = new stdClass();
        $post_data      = Input::all();
        
        foreach ($post_data as $site) {
            
            if (isset($site[$step_list])) {
                foreach ($site[$step_list] as $request) {
                    if (isset($request['deposit_check'])) {
                        if ('1' == $request['deposit_check']) {
                            $deposit_db->cancelRequest($request['d_seq']);
                        }
                    }
                }
            }
        }
        
        $srv_resp->sts = 1;
        
        return json_encode($srv_resp);
    }
    
    public function setStatus($step_list, $sts)
    {
        $deposit_db       = new Deposit();
        
        $srv_resp       = new stdClass();
        $post_data      = Input::all();
        
        foreach ($post_data as $site) {
            
            if (isset($site[$step_list])) {
                foreach ($site[$step_list] as $request) {
                    if (isset($request['deposit_check'])) {
                        if ('1' == $request['deposit_check']) {
                            $deposit_db->updateStatus($request['d_seq'], $sts);
                        }
                    }
                }
            }
        }
        
        $srv_resp->sts = 1;
        
        return json_encode($srv_resp);
    }
    
}