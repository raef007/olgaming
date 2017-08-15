<?php
class PaymentSettleController extends BaseController {

public function showGetPaymentSettle(){
        
        $post_data          = Input::all();
        $limit              = 5;
        $srv_resp           = new stdClass();
        $all_sites          = DB::table('SITE')->get();
        $all_count_deposit  = 0;
        $all_count_withdraw = 0;
        
        $all_total_deposit  = 0;
        $all_total_withdraw = 0;
        
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

            $withdraw_query = DB::table('WITHDRAW')
                ->select('*', 'WITHDRAW.money')
                ->where('WITHDRAW.site_id', $site->site_id)
                ->join('MEMBER', 'MEMBER.user_id', '=', 'WITHDRAW.user_id');
            
            $site->withdraws           = $withdraw_query->get();
            $site->withdraw_count      = count($site->withdraws);
            $site->withdraw_offset     = 0;
            $site->withdraw_limit      = $limit;
            $site->withdraw_max_page   = floor($site->withdraw_count / $site->withdraw_limit);
            
            $all_count_withdraw        += $site->withdraw_count;
            
            if (0 == ($site->withdraw_count % $site->withdraw_limit)) {
                $site->withdraw_max_page     = $site->withdraw_max_page - 1;
            }
            
            for ($count = 0; $count <= $site->withdraw_max_page; $count++) {
                $site->withdraw_pages[]  = $count;
            }

            $total_deposit = 0;

            foreach ($site->deposits as $deposit) {
                $total_deposit += $deposit->money;
            }

            $total_withdraw = 0;

            foreach ($site->withdraws as $withdraw) {
                $total_withdraw += $withdraw->money;
            }

            $site->total_deposit    = $total_deposit;
            $site->total_withdraw   = $total_withdraw;
            
            $all_total_deposit      += $total_deposit;
            $all_total_withdraw     += $total_withdraw;
        }
        
        $srv_resp->sites        = $all_sites;

        $srv_resp->deposit_count        = $all_count_deposit;
        $srv_resp->deposit_offset       = 0;
        $srv_resp->deposit_limit        = $limit;
        $srv_resp->deposit_max_page     = floor($srv_resp->deposit_count / $srv_resp->deposit_limit);
        $srv_resp->all_total_deposit    = $all_total_deposit;
        $srv_resp->all_total_withdraw   = $all_total_withdraw;
        
        if (0 == ($srv_resp->deposit_count % $srv_resp->deposit_limit)) {
            $srv_resp->deposit_max_page    = $srv_resp->deposit_max_page - 1;
        }
        
        for ($count = 0; $count <= $srv_resp->deposit_max_page; $count++) {
            $srv_resp->deposit_pages[]  = $count;
        }
        
        $srv_resp->withdraw_count       = $all_count_withdraw;
        $srv_resp->withdraw_offset      = 0;
        $srv_resp->withdraw_limit       = $limit;
        $srv_resp->withdraw_max_page    = floor($srv_resp->withdraw_count / $srv_resp->withdraw_limit);
        
        if (0 == ($srv_resp->withdraw_count % $srv_resp->withdraw_limit)) {
            $srv_resp->withdraw_max_page    = $srv_resp->withdraw_max_page - 1;
        }
        
        for ($count = 0; $count <= $srv_resp->withdraw_max_page; $count++) {
            $srv_resp->withdraw_pages[]  = $count;
        }
        
        return json_encode($srv_resp); 
    }
    public function searchDeposit(){

    	$post_data          = Input::all();
        $limit              = 5;
        $srv_resp           = new stdClass();
        $all_sites          = DB::table('SITE')->get();
        $all_count_deposit   = 0;
        $all_count_withdraw   = 0;
        
        foreach($all_sites as $site) {
            $deposit_query = DB::table('DEPOSIT')
                ->select('*', 'DEPOSIT.money')
                ->where('DEPOSIT.site_id', $site->site_id)
                ->join('MEMBER', 'MEMBER.user_id', '=', 'DEPOSIT.user_id');
            
            if ('' != $post_data['from']) {
                $deposit_query->where('DEPOSIT.reg_date', '>=', $post_data['from']);
            }
                
            if ('' != $post_data['to']) {
                $deposit_query->where('DEPOSIT.reg_date', '<=', $post_data['to']);
            }
            
            if ((isset($post_data['filter_by']))
            && (isset($post_data['filter_val']))) {
                if (('' != $post_data['filter_by'])
                && ('' != $post_data['filter_val'])) {
                    $deposit_query->where($post_data['filter_by'], 'like', '%'.$post_data['filter_val'].'%');
                }
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

            $withdraw_query = DB::table('WITHDRAW')
                ->select('*', 'WITHDRAW.money')
                ->where('WITHDRAW.site_id', $site->site_id)
                ->join('MEMBER', 'MEMBER.user_id', '=', 'WITHDRAW.user_id');
            
            if ('' != $post_data['from']) {
                $withdraw_query->where('WITHDRAW.reg_date', '>=', $post_data['from']);
            }
                
            if ('' != $post_data['to']) {
                $withdraw_query->where('WITHDRAW.reg_date', '<=', $post_data['to']);
            }
            
            if ((isset($post_data['filter_by']))
            && (isset($post_data['filter_val']))) {
                if (('' != $post_data['filter_by'])
                && ('' != $post_data['filter_val'])) {
                    $withdraw_query->where($post_data['filter_by'], 'like', '%'.$post_data['filter_val'].'%');
                }
            }
            
            $site->withdraws           = $withdraw_query->get();
            $site->withdraw_count      = count($site->withdraws);
            $site->withdraw_offset     = 0;
            $site->withdraw_limit      = $limit;
            $site->withdraw_max_page   = floor($site->withdraw_count / $site->withdraw_limit);
            
            $all_count_withdraw        += $site->withdraw_count;
            
            if (0 == ($site->withdraw_count % $site->withdraw_limit)) {
                $site->withdraw_max_page     = $site->withdraw_max_page - 1;
            }
            
            for ($count = 0; $count <= $site->withdraw_max_page; $count++) {
                $site->withdraw_pages[]  = $count;
            }

            $total_deposit = 0;

            foreach ($site->deposits as $deposit) {
                $total_deposit += $deposit->money;
            }

            $total_withdraw = 0;

            foreach ($site->withdraws as $withdraw) {
                $total_withdraw += $withdraw->money;
            }

            $site->total_deposit    = $total_deposit;
            $site->total_withdraw   = $total_withdraw;

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
        $srv_resp->withdraw_count   = $all_count_withdraw;
        $srv_resp->withdraw_offset      = 0;
        $srv_resp->withdraw_limit       = $limit;
        $srv_resp->withdraw_max_page    = floor($srv_resp->withdraw_count / $srv_resp->withdraw_limit);
        
        if (0 == ($srv_resp->withdraw_count % $srv_resp->withdraw_limit)) {
            $srv_resp->withdraw_max_page    = $srv_resp->withdraw_max_page - 1;
        }
        
        for ($count = 0; $count <= $srv_resp->withdraw_max_page; $count++) {
            $srv_resp->withdraw_pages[]  = $count;
        }        
        return json_encode($srv_resp); 
    }
}