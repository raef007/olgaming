<?php

class LevelAccountController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
    
    public function showGetLevelAccounts()
	{
        $limit      = 3;
        $all_sites  = DB::table('SITE')->get();
        
        foreach($all_sites as $site) {
            $site->level_accounts = DB::table('LEVEL_ACCOUNT')
                ->where('site_id', $site->site_id)
                ->get();
                
            $site->opt_available    = array();
            $opt_used               = array();
            
            foreach ($site->level_accounts as $account) {
                $opt_used[]    = $account->level;
            }
            
            for ($idx = 0; 4 > $idx; $idx++) {
                $needle_pos = array_search($idx, $opt_used);
                
                if (FALSE !== $needle_pos) {
                    $site->opt_available[]    = $opt_used[$needle_pos];
                }
            }
        }
        
        return json_encode([$all_sites]);
	}
    
    public function addSaveLevelAccounts()
    {
        $lvl_acc_db     = new LevelAccount();
        $post_data      = Input::all();
        
        foreach ($post_data as $site) {
        
            $opt_used   = array();
            $dup_check  = 0;
            
            foreach ($site['level_accounts'] as $account) {
                
                if (FALSE !== array_search($account['level'], $opt_used)) {
                    $dup_check  = 1;
                }
                
                $opt_used[] = $account['level'];
            }
        }
        
        if (0 == $dup_check) {
            foreach ($post_data as $site) {
                
                $data['site_id']        = $site['site_id'];
                
                foreach ($site['level_accounts'] as $account) {
                    
                    $data['level']          = $account['level'];
                    $data['bank_name']      = $account['bank_name'];
                    $data['bank_account']   = $account['bank_account'];
                    $data['bank_owner']     = $account['bank_owner'];
                    
                    $lvl_acc_db->addUpdateRecord($data);
                }
            }
        
        }
        
        $data = $this->showGetLevelAccounts();
        
        return $data;
    }
}
