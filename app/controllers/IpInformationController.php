<?php

class IpInformationController extends BaseController {
    
    public function searchIpInfo()
    {
        $all_count  = 0;
        $limit      = 3;
        
        $post_data  = Input::all();
        
        $all_sites  = DB::table('SITE')->get();
        
        foreach($all_sites as $site) {
            $query  = DB::table('IP_BLOCK')
                ->where('site_id', $site->site_id);
            
            if ('' != $post_data['from']) {
                $query->where('reg_date', '>=', $post_data['from']);
            }
                
            if ('' != $post_data['to']) {
                $query->where('reg_date', '<=', $post_data['to']);
            }
            
            if ((isset($post_data['filter_by']))
            && (isset($post_data['filter_val']))) {
                if (('' != $post_data['filter_by'])
                && ('' != $post_data['filter_val'])) {
                    $query->where($post_data['filter_by'], 'like', '%'.$post_data['filter_val'].'%');
                }
            }
            
            $site->ip_infos     = $query->get();
            $site->url_count    = count($site->ip_infos);
            $site->offset       = 0;
            $site->limit        = $limit;
            $site->max_page     = floor($site->url_count / $site->limit);
            
            $all_count          += $site->url_count;
            
            if (0 == ($site->url_count % $site->limit)) {
                $site->max_page     = $site->max_page - 1;
            }
            
            for ($count = 0; $count <= $site->max_page; $count++) {
                $site->pages[]  = $count;
            }
        }
        
        $page_info              = new stdClass();
        $page_info->url_count   = $all_count;
        $page_info->offset      = 0;
        $page_info->limit       = $limit;
        $page_info->max_page    = floor($page_info->url_count / $page_info->limit);
        
        if (0 == ($page_info->url_count % $page_info->limit)) {
            $page_info->max_page    = $page_info->max_page - 1;
        }
        
        for ($count = 0; $count <= $page_info->max_page; $count++) {
            $page_info->pages[]  = $count;
        }
        
        return json_encode([$all_sites, $page_info]);
    }
    
    public function addSaveIpInfo()
    {
        $ipinfo_db    = new IpBlock();
        
        $data           = array();
        $srv_resp       = new stdClass();
        $post_data      = Input::all();
        
        $data['ipb_seq']    = 0;
        $data['site_id']    = $post_data['site_id'];
        $data['ip_num']     = $post_data['ipadd1'].'-'.$post_data['ipadd2'].'-'.$post_data['ipadd3'].'-'.$post_data['ipadd4'];
        
        if (isset($post_data['ipadd5'])) {
            if ('' != $post_data['ipadd5']) {
                $data['ip_num'] = $data['ip_num'].'-'.$post_data['ipadd5'];
            }
        }
        
        $data['reason']     = $post_data['reason'];
        
        $srv_resp->sts      = $ipinfo_db->addUpdateRecord($data);
        
        return json_encode($srv_resp);
    }
    
}