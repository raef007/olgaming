<?php

class IpInformationController extends BaseController {
    
    public function searchIpInfo()
    {
        
        $limit      = 3;
        $srv_resp   = new stdClass();
        $post_data  = Input::all();
        $all_sites  = DB::table('SITE')->get();
        $all_count  = 0;
        
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
        
        $srv_resp->sites        = $all_sites;
        $srv_resp->url_count   = $all_count;
        $srv_resp->offset      = 0;
        $srv_resp->limit       = $limit;
        $srv_resp->max_page    = floor($srv_resp->url_count / $srv_resp->limit);
        
        if (0 == ($srv_resp->url_count % $srv_resp->limit)) {
            $srv_resp->max_page    = $srv_resp->max_page - 1;
        }
        
        for ($count = 0; $count <= $srv_resp->max_page; $count++) {
            $srv_resp->pages[]  = $count;
        }
        
        return json_encode($srv_resp);
    }
    
    public function addSaveIpInfo()
    {
        $ipinfo_db    = new IpBlock();
        $data           = array();
        $srv_resp       = new stdClass();
        $post_data      = Input::all();
        $dup_check      = 0;
        $err_msg        = array();
        
        $error_count    = $this->validateIPBlock($post_data);

        if (0 >= count($error_count)) {
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
        }
        else {
            $err_msg[] = $error_count;
        }

        return json_encode($err_msg);
    }
    
    private function validateIPBlock($data)
    {
        $messages   = array();                      /* Validation Messages according to rules   */
        $rules      = array();                      /* Validation Rules                         */
        $errors     = array();
        
        $messages   = array(
            'ipadd1.required'        => 'please put complete IP Address',
            'ipadd1.numeric'          => 'IP address must be a numeric',
            'ipadd2.required'        => 'please put complete IP Address',
            'ipadd2.numeric'          => 'IP address must be a numeric',
            'ipadd3.required'        => 'please put complete IP Address',
            'ipadd3.numeric'          => 'IP address must be a numeric',
            'ipadd4.required'        => 'please put complete IP Address',
            'ipadd4.numeric'          => 'IP address must be a numeric',
            'reason.required'        => 'please input a reason',
        );
        
        $rules      = array(
            'ipadd1'         => 'required|numeric',
            'ipadd2'         => 'required|numeric',
            'ipadd3'         => 'required|numeric',
            'ipadd4'         => 'required|numeric',
            'reason'         => 'required',

        );
        
        /*  Run the Laravel Validation  */
        $validator = Validator::make($data, $rules, $messages);
        
        if ($validator->fails()) {
            $errors   = $validator->messages()->all();
        }
        
        return $errors;
    }
}