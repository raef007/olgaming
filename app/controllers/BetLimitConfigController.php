<?php

class BetLimitConfigController extends BaseController {
    
    public function showGetBetLimit()
	{
        $limit          = 3;
        $all_configs    = 0;
        $srv_resp       = new stdClass();
        $all_sites      = DB::table('SITE')->get();
        
        foreach($all_sites as $site) {
            $configs    = DB::table('LEVEL_BET_MONEY')
                ->where('site_id', $site->site_id)
                ->get();
            
            $site->sportsbook       = array();
            $site->live_casino      = array();
            $site->virtua_sports    = array();
            $site->racing           = array();
            
            foreach ($configs as $config) {
                switch ($config->sort) {
                    case 0:
                        $site->sportsbook[]     = $config;
                        break;
                    
                    case 1:
                        $site->live_casino[]    = $config;
                        break;
                        
                    case 2:
                        $site->virtua_sports[]  = $config;
                        break;
                        
                    case 3:
                        $site->racing[]         = $config;
                        break;
                }
            }
            
            $site->limit        = $limit;
            $site->url_count    = count($configs);
            $site->offset       = 0;
            $site->max_page     = floor($site->url_count / $site->limit);
            
            if (0 == ($site->url_count % $site->limit)) {
                $site->max_page     = $site->max_page - 1;
            }
            
            for ($count = 0; $count <= $site->max_page; $count++) {
                $site->pages[]  = $count;
            }
            
            $all_configs         += $site->url_count;
        }
        
        $srv_resp->sites        = $all_sites;
        
        $srv_resp->limit        = $limit;
        $srv_resp->url_count    = $all_configs;
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
    
    public function addSaveBetConfig()
    {
        $lvm_typ        = array('sportsbook', 'live_casino', 'virtua_sports', 'racing');
        $lvm_db         = new LevelBetMoney();
        $site_db        = new Site();
        
        $data           = array();
        $srv_resp       = new stdClass();
        $post_data      = Input::all();
        
        $idx            = 1;
        $err_msg        = array();
        $err_obj        = new stdClass();
        
        foreach ($post_data as $site) {
            
            $site_db->updateMoneyConfig($site);
            
            for ($ctr = 0; $ctr < 4; $ctr++) {
                
                if (isset($site[$lvm_typ[$ctr]])) {
                    foreach ($site[$lvm_typ[$ctr]] as $config) {
                        if (isset($config['config_check'])) {
                            if ('1' == $config['config_check']) {
                                $errors_found   = $this->validateConfigs($config);
                                
                                if (0 >= count($errors_found)) {
                                    $lvm_db->addUpdateRecord($config);
                                }
                                 else {
                                    $err_obj->msgs  = $errors_found;
                                    $err_obj->idx   = $idx;
                                    $err_msg[]      = $err_obj;
                                }
                            }
                        }
                        
                        $idx++;
                    }
                }
            }
        }
        
        $srv_resp   = $this->showGetBetLimit();
        
        $json_data          = json_decode($srv_resp);
        $json_data->errors  = $err_msg;
        
        return json_encode($json_data);
    }
    
    public function deleteConfigs()
    {
        $lvm_typ        = array('sportsbook', 'live_casino', 'virtua_sports', 'racing');
        $lvm_db         = new LevelBetMoney();
        
        $srv_resp       = new stdClass();
        $post_data      = Input::all();
        
        foreach ($post_data as $site) {
            
            for ($ctr = 0; $ctr < 4; $ctr++) {
                
                if (isset($site[$lvm_typ[$ctr]])) {
                    foreach ($site[$lvm_typ[$ctr]] as $config) {
                        if (isset($config['config_check'])) {
                            if ('1' == $config['config_check']) {
                                $lvm_db->deleteRecord($config['lvm_seq']);
                            }
                        }
                    }
                }
            }
        }
        
        $srv_resp   = $this->showGetBetLimit();
        
        return $srv_resp;
    }
    
    private function validateConfigs($data)
    {
        $messages   = array();                      /* Validation Messages according to rules   */
        $rules      = array();                      /* Validation Rules                         */
        $errors     = array();
        
        $messages   = array(
            'level.required'                            => '회원레벨 is required',
            'level.numeric'                             => '회원레벨 must be numeric',
            
            'realtime_min_bet_money.required'           => '실시간 최소 베팅액 is required',
            'realtime_min_bet_money.numeric'            => '실시간 최소 베팅액 must be numeric',
            
            'realtime_max_bet_money.required'           => '실시간 최대 베팅액 is required',
            'realtime_max_bet_money.numeric'            => '실시간 최대 베팅액 must be numeric',
            
            'sport_min_bet_money.required'              => '스포츠 최소 베팅액 is required',
            'sport_min_bet_money.numeric'               => '스포츠 최소 베팅액 must be numeric',
            
            'sport_max_bet_money.required'              => '스포츠 최대 베팅액 is required',
            'sport_max_bet_money.numeric'               => '스포츠 최대 베팅액 must be numeric',
            
            'member_ppochi_percent.required'            => '회원 낙첨금 is required',
            'member_ppochi_percent.numeric'             => '회원 낙첨금 must be numeric',
            'member_ppochi_percent.min'                 => '회원 낙첨금 must be between 1 - 100',
            'member_ppochi_percent.max'                 => '회원 낙첨금 must be between 1 - 100',
            
            'recommand_mem_ppochi_percent.required'     => '추천인 낙첨금 is required',
            'recommand_mem_ppochi_percent.numeric'      => '추천인 낙첨금 must be numeric',
            'recommand_mem_ppochi_percent.min'          => '추천인 낙첨금 must be between 1 - 100',
            'recommand_mem_ppochi_percent.max'          => '추천인 낙첨금 must be between 1 - 100',
            
            'daily_first_deposit_percent.required'      => '하루 첫충 is required',
            'daily_first_deposit_percent.numeric'       => '하루 첫충 must be numeric',
            'daily_first_deposit_percent.min'           => '하루 첫충 must be between 1 - 100',
            'daily_first_deposit_percent.max'           => '하루 첫충 must be between 1 - 100',

        );
        
        $rules      = array(
            'lvm_seq'                       => 'required|numeric',
            'site_id'                       => 'required|numeric',
            'sort'                          => 'required|numeric',
            
            'level'                         => 'required|numeric',
            'realtime_min_bet_money'        => 'required|numeric',
            'realtime_max_bet_money'        => 'required|numeric',
            'sport_min_bet_money'           => 'required|numeric',
            'sport_max_bet_money'           => 'required|numeric',
            'member_ppochi_percent'         => 'required|numeric|min:1|max:100',
            'recommand_mem_ppochi_percent'  => 'required|numeric|min:1|max:100',
            'daily_first_deposit_percent'   => 'required|numeric|min:1|max:100',
        );
        
        /*  Run the Laravel Validation  */
		$validator = Validator::make($data, $rules, $messages);
        
        if ($validator->fails()) {
            $errors   = $validator->messages()->all();
        }
        
        return $errors;
    }

}