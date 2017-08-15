<?php
class DepoSettleController extends BaseController {
public function showGetDepoSettle(){
        $post_data          = Input::all();
        $limit              = 5;
        $srv_resp           = new stdClass();
        $all_sites          = DB::table('SITE')->get();
        $all_count_deposit   = 0;
        
        foreach($all_sites as $site) {
            $deposit_query = DB::table('DEPOSIT')
                ->select('*', 'DEPOSIT.money')
                ->where('DEPOSIT.site_id', $site->site_id)
                ->join('MEMBER', 'MEMBER.user_id', '=', 'DEPOSIT.user_id');
            
            $site->deposits          = $deposit_query->get();
            $site->deposit_count     = count($site->deposits);
            $site->deposit_offset    = 0;
            $site->deposit_limit     = $limit;
            $site->deposit_max_page  = floor($site->deposit_count / $site->deposit_limit);
            
            $all_count_deposit      += $site->deposit_count;
            
            if (0 == ($site->deposit_count % $site->deposit_limit)) {
                $site->deposit_max_page     = $site->deposit_max_page - 1;
            }
            
            for ($count = 0; $count <= $site->deposit_max_page; $count++) {
                $site->deposit_pages[]  = $count;
            }

            $total_deposit = 0;

            foreach ($site->deposits as $deposit) {
                $total_deposit += $deposit->money;
            }

            $site->total_deposit    = $total_deposit;
        }
        $srv_resp->sites        = $all_sites;

        $srv_resp->deposit_count   = $all_count_deposit;
        $srv_resp->deposit_offset      = 0;
        $srv_resp->deposit_limit       = $limit;
        $srv_resp->deposit_max_page    = floor($srv_resp->deposit_count / $srv_resp->deposit_limit);
        
        if (0 == ($srv_resp->deposit_count % $srv_resp->deposit_limit)) {
            $srv_resp->deposit_max_page    = $srv_resp->deposit_max_page - 1;
        }
        
        for ($count = 0; $count <= $srv_resp->deposit_max_page; $count++) {
            $srv_resp->deposit_pages[]  = $count;
        }   
        return json_encode($srv_resp); 
    }
public function searchDeposit(){
        $post_data          = Input::all();
        $limit              = 5;
        $srv_resp           = new stdClass();
        $all_sites          = DB::table('SITE')->get();
        $all_count_deposit   = 0;
        
        foreach($all_sites as $site) {
            $deposit_query = DB::table('DEPOSIT')
                ->select('*', 'DEPOSIT.money')
                ->where('DEPOSIT.site_id', $site->site_id)
                ->join('MEMBER', 'MEMBER.user_id', '=', 'DEPOSIT.user_id');
            
            if ('' != $post_data['from']) {
                $deposit_query->where('WITHDRAW.reg_date', '>=', $post_data['from']);
            }
                
            if ('' != $post_data['to']) {
                $deposit_query->where('WITHDRAW.reg_date', '<=', $post_data['to']);
            }

            $site->deposits          = $deposit_query->get();
            $site->deposit_count     = count($site->deposits);
            $site->deposit_offset    = 0;
            $site->deposit_limit     = $limit;
            $site->deposit_max_page  = floor($site->deposit_count / $site->deposit_limit);
            
            $all_count_deposit      += $site->deposit_count;
            
            if (0 == ($site->deposit_count % $site->deposit_limit)) {
                $site->deposit_max_page     = $site->deposit_max_page - 1;
            }
            
            for ($count = 0; $count <= $site->deposit_max_page; $count++) {
                $site->deposit_pages[]  = $count;
            }

            $total_deposit = 0;

            foreach ($site->deposits as $deposit) {
                $total_deposit += $deposit->money;
            }

            $site->total_deposit    = $total_deposit;
        }
        $srv_resp->sites        = $all_sites;

        $srv_resp->deposit_count   = $all_count_deposit;
        $srv_resp->deposit_offset      = 0;
        $srv_resp->deposit_limit       = $limit;
        $srv_resp->deposit_max_page    = floor($srv_resp->deposit_count / $srv_resp->deposit_limit);
        
        if (0 == ($srv_resp->deposit_count % $srv_resp->deposit_limit)) {
            $srv_resp->deposit_max_page    = $srv_resp->deposit_max_page - 1;
        }
        
        for ($count = 0; $count <= $srv_resp->deposit_max_page; $count++) {
            $srv_resp->deposit_pages[]  = $count;
        }   
        return json_encode($srv_resp); 
    }
}