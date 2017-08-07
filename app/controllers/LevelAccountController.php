<?php

class LevelAccountController extends BaseController {
    
    public function showGetLevelAccounts()
	{
        $limit      = 3;
        $all_accnts = 0;
        $srv_resp   = new stdClass();
        $all_sites  = DB::table('SITE')->get();
        
        foreach($all_sites as $site) {
            $site->level_accounts = DB::table('LEVEL_ACCOUNT')
                ->where('site_id', $site->site_id)
                ->get();
            
            $site->limit        = $limit;
            $site->url_count    = count($site->level_accounts);
            $site->offset       = 0;
            $site->max_page     = floor($site->url_count / $site->limit);
            
            if (0 == ($site->url_count % $site->limit)) {
                $site->max_page     = $site->max_page - 1;
            }
            
            for ($count = 0; $count <= $site->max_page; $count++) {
                $site->pages[]  = $count;
            }
            
            $all_accnts         += $site->url_count;
        }
        
        $srv_resp->sites        = $all_sites;
        
        $srv_resp->limit        = $limit;
        $srv_resp->url_count    = $all_accnts;
        $srv_resp->offset       = 0;
        $srv_resp->max_page     = floor($srv_resp->url_count / $srv_resp->limit);
        
        if (0 == ($srv_resp->url_count % $srv_resp->limit)) {
            $srv_resp->max_page     = $srv_resp->max_page - 1;
        }
        
        for ($count = 0; $count <= $srv_resp->max_page; $count++) {
            $srv_resp->pages[]  = $count;
        }
        
        return json_encode($srv_resp);
	}
    
    public function addSaveLevelAccounts()
    {
        $lvl_acc_db     = new LevelAccount();
        $post_data      = Input::all();
        
        $idx            = 1;
        $err_msg        = array();
        $err_obj        = new stdClass();
        
        foreach ($post_data as $site) {
            
            $data['site_id']        = $site['site_id'];
            
            foreach ($site['level_accounts'] as $account) {
                
                $data['la_seq']         = $account['la_seq'];
                $data['level']          = $account['level'];
                $data['bank_name']      = $account['bank_name'];
                $data['bank_account']   = $account['bank_account'];
                $data['bank_owner']     = $account['bank_owner'];
                
                $error_found    = $this->validateLevelAccounts($data);
                
                if (0 >= count($error_found)) {
                    $lvl_acc_db->addUpdateRecord($data);
                }
                else {
                    $err_obj->msgs  = $error_found;
                    $err_obj->idx   = $idx;
                    $err_msg[]      = $err_obj;
                }
            }
        }
        
        $idx++;
        
        $data = $this->showGetLevelAccounts();
        
        $json_data          = json_decode($data);
        $json_data->errors  = $err_msg;
        
        return json_encode($json_data);
    }
    
    private function validateLevelAccounts($data)
    {
        $messages   = array();                      /* Validation Messages according to rules   */
        $rules      = array();                      /* Validation Rules                         */
        $errors     = array();
        
        $messages   = array(
            'level.required'        => 'Level is required',
            'bank_name.required'    => 'Bank Name is required',
            'bank_account.required' => 'Bank Account is required',
            'bank_owner.required'   => 'Bank Owner is required',
        );
        
        $rules      = array(
            'level'         => 'required',
            'bank_name'     => 'required',
            'bank_account'  => 'required',
            'bank_owner'    => 'required',
        );
        
        /*  Run the Laravel Validation  */
		$validator = Validator::make($data, $rules, $messages);
        
        if ($validator->fails()) {
            $errors   = $validator->messages()->all();
        }
        
        return $errors;
    }
}
