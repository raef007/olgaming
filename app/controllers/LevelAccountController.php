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
        $dup_check      = 0;
        
        foreach ($post_data as $site) {
            
            $data['site_id']        = $site['site_id'];
            
            foreach ($site['level_accounts'] as $account) {
                
                $data['la_seq']         = $account['la_seq'];
                $data['level']          = $account['level'];
                $data['bank_name']      = $account['bank_name'];
                $data['bank_account']   = $account['bank_account'];
                $data['bank_owner']     = $account['bank_owner'];
                
                $lvl_acc_db->addUpdateRecord($data);
            }
        }
        
        $data = $this->showGetLevelAccounts();
        
        return $data;
    }
    
    public function hackShit()
    {
        $post_url   = URL::To('hack/test-time');
        $post_url   = 'http://vava26.com/admin/backOffice.jsp';
        
        $data_json  = '{"businessName":"site","screenNumber":"0001","functionNumber":"0004","nowTab":"2","nowPage":0,"cntRecordPerPage":0,"adminId":"j3849","etc":"extra","dataList":[{"insert_key":"-1","site_id":"2","level":"0","bank_name":"국민은행","bank_owner":"","bank_account":""}]}';
        //$data_json  = '{"parameter":{"businessName":"site","screenNumber":"0001","functionNumber":"0004","nowTab":"2","nowPage":0,"cntRecordPerPage":0,"adminId":"j3849","etc":"extra","dataList":[{"insert_key":"-1","site_id":"2","level":"0","bank_name":"국민은행","bank_owner":"","bank_account":""}]}}';
        
        $input['parameters']   = $data_json;
        
        /*--------------------------------------------------------------------
        /*	Send POST request to Highcharts export Server via CuRL
        /*------------------------------------------------------------------*/
        /* Initializes the CuRL Library */
        $curl = curl_init();
        
        /* Sets the CuRL POST Request configuration  */
        curl_setopt($curl, CURLOPT_URL, $post_url);
        //curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER , false);
        //curl_setopt($curl, CURLOPT_POSTFIELDS, $data_json);
        curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($input));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $response  = curl_exec($curl);
        $output['sent_hdr'] = curl_getinfo($curl);
        curl_close($curl);
        //print_r($output['sent_hdr']);
        print_r($response);
        /* Execute CuRL Request */
        //$result = curl_exec($curl);
        
        //$output['sent_hdr'] = curl_getinfo($curl);
    }
    
    public function hackTestJson()
    {
        $json_input = Input::all();
        print_r($json_input);
    }
}
