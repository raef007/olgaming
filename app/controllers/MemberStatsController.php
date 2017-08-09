<?php

class MemberStatsController extends BaseController {
    
    public function searchMemberStats()
    {
        $limit          = 3;
        $srv_resp       = new stdClass();
        $post_data      = Input::all();
        $all_sites      = DB::table('SITE')->get();
        $all_count      = 0;
        $total_deposit  = 0;
        
        foreach($all_sites as $site) {
            $query_deposits = DB::table('DEPOSIT')
                ->select('*', DB::raw('SUM(DEPOSIT.money) as total_deposit'), DB::raw('COUNT(d_seq) as total_count'))
                ->groupBy('MEMBER.member_level')
                ->join('MEMBER', 'MEMBER.user_id', '=', 'DEPOSIT.user_id')
                ->where('DEPOSIT.site_id', $site->site_id);
            
            $query_users    = DB::table('MEMBER')
                ->where('site_id', $site->site_id);
            
            $query_login    = DB::table('SIGNIN_LOG')
                ->where('site_id', $site->site_id);
            
            if ('' != $post_data['from']) {
                $query_deposits->where('DEPOSIT.finish_date', '>=', $post_data['from']);
                $query_users->where('reg_date', '>=', $post_data['from']);
                $query_login->where('reg_date', '>=', $post_data['from']);
            }
                
            if ('' != $post_data['to']) {
                $query_deposits->where('DEPOSIT.finish_date', '<=', $post_data['to']);
                $query_users->where('reg_date', '<=', $post_data['to']);
                $query_login->where('reg_date', '<=', $post_data['to']);
                
            }
            
            $site->deposits     = $query_deposits->get();;
            
            /*  Sets Pagination Configurations      */
            $site->limit            = $limit;
            $site->deposit_count    = count($site->deposits);
            $site->deposit_offset   = 0;
            $site->deposit_page     = floor($site->deposit_count / $site->limit);
            
            if (0 == ($site->deposit_count % $site->limit)) {
                $site->deposit_page         = $site->deposit_page - 1;
            }
            
            for ($count = 0; $count <= $site->deposit_page; $count++) {
                $site->deposit_pages[]      = $count;
            }
            
            /*  Get total users and logins          */
            $site->total_users  = $query_users->count();
            $site->total_logins = $query_login->count();
            
        }
        
        $srv_resp->sites        = $all_sites;
        $srv_resp->url_count    = count($all_sites);
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