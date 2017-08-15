<?php

class SubscribeController extends BaseController {
    public function showGetSubscribe(){
        $post_data          = Input::all();
        $limit              = 5;
        $srv_resp           = new stdClass();
        $all_sites          = DB::table('SITE')->get();
        $all_count_memo   = 0;
        
        foreach($all_sites as $site) {
            $memo_query = DB::table('JOIN_MEMO')
                ->where('JOIN_MEMO.site_id', $site->site_id);
            
            $site->memos          = $memo_query->get();
        }
        $srv_resp->sites        = $all_sites;

        return json_encode($srv_resp); 
    }
public function addSaveSubscribe()
    {
        $subscriber_db   = new Subscribe();  
        $data       = array();
        $srv_resp   = new stdClass();
        $post_data  = Input::all();
        
        $data['jm_seq']             = $post_data['jm_seq'];
        $data['site_id']            = $post_data['site_id'];
        $data['subject']            = $post_data['subject'];
        $data['text']               = $post_data['text'];        
        
        $subscriber_db->addUpdateRecord($data);        
        $srv_resp   = $this->showGetSubscribe();        
        $json_data          = json_decode($srv_resp);
        
        return json_encode($json_data);
    }
    
}