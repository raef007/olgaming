<?php

class RecommendController extends BaseController {
    
    public function searchRecommends()
    {
        $limit          = 3;
        $srv_resp       = new stdClass();
        $post_data      = Input::all();
        $all_sites      = DB::table('SITE')->get();
        $all_count      = 0;
        
        foreach($all_sites as $site) {
            $query  = DB::table('RECOMMEND')
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
            
            $site->recommends       = $query->get();;
            
            /*  Sets Pagination Configurations      */
            $site->limit            = $limit;
            $site->url_count        = count($site->recommends);
            $site->offset           = 0;
            $site->max_page         = floor($site->url_count / $site->limit);
            
            $all_count              += $site->url_count;
            
            if (0 == ($site->url_count % $site->limit)) {
                $site->max_page     = $site->max_page - 1;
            }
            
            for ($count = 0; $count <= $site->max_page; $count++) {
                $site->pages[]      = $count;
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
    
    public function addSaveCode()
    {
        $code_db        = new RecommendCode();
        
        $idx            = 1;
        $err_msg        = array();
        $err_obj        = new stdClass();
        
        $data       = array();
        $srv_resp   = new stdClass();
        $post_data  = Input::all();
        
        if (0 == $post_data['code_type']) {
            $data['unique_code']    = $post_data['sub_code_user'];
            $data['user_id']        = $post_data['user_id'];
        }
        else {
            $data['unique_code']    = $post_data['sub_code_all'];
            $data['user_id']        = 0;
        }
        
        $data['r_seq']      = 0;
        $data['site_id']    = $post_data['site_id'];
        $data['admin_id']   = 'Admin1';
        
        $data['used_flag']  = 0;
        
        $errors_found   = $this->validateCode($data);
        
        if (0 >= count($errors_found)) {
            $code_db->addUpdateRecord($data);
        }
        else {
            $err_obj->msgs  = $errors_found;
            $err_obj->idx   = $idx;
            $err_msg[]      = $err_obj;
        }
        
        $idx++;
        
        return json_encode($err_msg);
    }
    
    private function validateCode($data)
    {
        $messages   = array();                      /* Validation Messages according to rules   */
        $rules      = array();                      /* Validation Rules                         */
        $errors     = array();
        
        $messages   = array(
            'user_id.required'      => '가입자 아이디 is required',
            'unique_code.required'  => '코드 is required',
            'unique_code.unique'    => '코드 already exist',
        );
        
        $rules      = array(
            'r_seq'         => 'required|numeric',
            'site_id'       => 'required|numeric',
            'admin_id'      => 'required',
            'user_id'       => 'required|numeric',
            'unique_code'   => 'required|unique:RECOMMEND,unique_code',

        );
        
        /*  Run the Laravel Validation  */
        $validator = Validator::make($data, $rules, $messages);
        
        if ($validator->fails()) {
            $errors   = $validator->messages()->all();
        }
        
        return $errors;
    }
    
    public function deleteCode()
    {
        $code_db        = new RecommendCode();
        
        $srv_resp       = new stdClass();
        $post_data      = Input::all();
        
        $code_db->deleteRecord($post_data['r_seq']);
        
        return json_encode($srv_resp);
    }
}