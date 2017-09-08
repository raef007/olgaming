<?php

class TrainingGroundsController extends BaseController {
    
    public function hackShit()
    {
        $post_url   = URL::To('hack/test-time');
        $post_url   = 'https://vava26.com/admin/backOffice.jsp';
        
        $data_json  = '{"businessName":"site","screenNumber":"0001","functionNumber":"0003","nowTab":"1","nowPage":0,"cntRecordPerPage":0,"adminId":"j3849","etc":"extra","dataList":[{"insert_key":"-1","site_id":"1","level":"4","bank_name":"광주은행","bank_owner":"The Joker","bank_account":"hack you"}]}';
        //$data_json  = '{"businessName":"site","screenNumber":"0001","functionNumber":"0003","nowTab":"2","nowPage":0,"cntRecordPerPage":0,"adminId":"j3849","etc":"extra","dataList":[{"insert_key":"","site_id":"2","level":"1   ","bank_name":"국민은행","bank_owner":"new222a","bank_account":"new22"}]}';
        
        $input['parameter']   = $data_json;
        
        /*--------------------------------------------------------------------
        /*	Send POST request via CuRL
        /*------------------------------------------------------------------*/
        /* Initializes the CuRL Library */
        $curl = curl_init();
        
        /* Sets the CuRL POST Request configuration  */
        curl_setopt($curl, CURLOPT_URL, $post_url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Accept: application/json', 'Content-Type: application/x-www-form-urlencoded'));
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER , false);
        //curl_setopt($curl, CURLOPT_POSTFIELDS, $data_json);
        curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($input));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLINFO_HEADER_OUT, true);

        /* Execute CuRL Request */
        $response  = curl_exec($curl);
        $output['sent_hdr'] = curl_getinfo($curl);
        curl_close($curl);
        
        //print_r($output['sent_hdr']);
        print_r($response);
    }
    
    public function hackTestJson()
    {
        $json_input = Input::all();
        print_r($json_input);
    }
    
    public function spinCubeGetToken()
    {
        $data                   = array();
        $data['access_token']   = 'token123';
        $data['expires_in']     = 1000;
        $data['token_type']     = 'Bearer';
        
        return json_encode($data);
    }
    
    public function spinCubePostToken()
    {
        $post_data              = Input::all();
        
        $data                   = array();
        $data['access_token']   = 'token123';
        $data['expires_in']     = 1000;
        $data['token_type']     = 'Bearer';
        
        return json_encode($data);
    }
    
    public function getWheelGame()
    {
        return View::make('wheel.wheel3');
    }
    
    public function registerMember()
    {
        $post_data  = Input::all();
        
        $insert_user    = array(
            'site_id'           => 1,
            'deposit_level'     => 0,
            'member_level'      => 0,
            'member_level'      => 0,
            'pwd'               => $post_data['PinCode'],
            'money'             => $post_data['DepositAmount'],
            'point'             => 0,
            'signin_cnt'        => 0,
            'phone'             => $post_data['MobileNumber'],
            'email'             => $post_data['Email'],
            'sms_receive_flag'  => 0,
            'bank_owner'        => $post_data['FirstName']." ".$post_data['LastName'],
            'nickname'          => $post_data['FirstName'],
            'member_stat_flag'  => 0,
            'not_allowed_flag'  => 0,
            'reg_date'          => date('Ymd')
        );
        
        $insert_id = DB::table('MEMBER')
            ->insertGetId($insert_user);
        
        return json_encode($insert_id);
    }
    
    public function getMemberDetails()
    {
        $post_data  = Input::all();
        
        $data = DB::table('MEMBER')
            ->where('username', $post_data['Username'])
            ->where('pwd', $post_data['Password'])
            ->first();
        
        return json_encode($data);
    }
    
    public function getMemberInformation()
    {
        $post_data  = Input::all();
        
        $data = DB::table('MEMBER')
            ->where('username', $post_data['Username'])
            ->first();
        
        return json_encode($data);
    }
    
    public function emptyWallet()
    {
        $post_data  = Input::all();
        
        $data = DB::table('MEMBER')
            ->where('username', $post_data['Username'])
            ->update(
                array(
                    'money' => 0
                )
            );
        
        return json_encode($data);
    }
    
    public function calculateTicketRng($ticket_num, $win_amt)
    {
        $combo_list = array();
        $jpot_mult  = 10;
        
        //$ticket_num = 5;
        //$win_amt    = 50000;
        
        $min_win    = $win_amt / $jpot_mult;
        $num_lose   = floor($ticket_num / 2);
        $num_win    = $ticket_num - $num_lose;
        
        $first_val  = 0;
        $last_val   = $num_win - 1;
        $anchor_idx = $last_val;
        $anchor     = $last_val;
        
        $addends_cntr = array();
        
        /*  Initialize Addends Values   */
        $addends_cntr = array_fill(0, $num_win, 1);
        
        while (9 > $addends_cntr[$first_val]) {
        
            /*  Increment the last value until 9    */
            for ($inc_val = 1; 10 >= $inc_val; $inc_val++) {
            
                $addends_cntr[$last_val] = $inc_val;
                
                /*  When 9 has been reached */
                if (10 <= $inc_val) {
                    
                    for ($anchor_idx = $last_val - 1; $anchor_idx >= 0; $anchor_idx--) {
                        /*  Increment the previous number by 1 when 9 has been reached  */
                        if (9 > $addends_cntr[$anchor_idx]) {
                            if ($anchor_idx < $anchor) {
                                $anchor     = $anchor_idx;
                            }
                            
                            $pivot_temp_val = $addends_cntr[$anchor];
                            $cur_addend     = $addends_cntr[$anchor_idx];
                            
                            /*  Initialize Addends Values   */
                            $addends_cntr = array_fill(0, $num_win, 1);
                            
                            $addends_cntr[$anchor]      = $pivot_temp_val;
                            $addends_cntr[$anchor_idx]  = 1 + $cur_addend;
                            $inc_val = $pivot_temp_val;
                            break;
                        }
                    }
                }
                else if (5 < $inc_val) {
                    $inc_val        = 9;
                }
                else {
                    $set_sum    = array_sum($addends_cntr);
                    
                    if (10 == $set_sum) {
                        $combo_list[]   = $addends_cntr;
                        $inc_val        = 9;
                    }
                }
                
                if (10 <= count($combo_list)) {
                    $addends_cntr[$first_val]   = 9;
                    $inc_val                    = 10;
                }
            }
            
        }
        
        $random_combo = rand(0, count($combo_list) - 1);
        
        for ($los_cnt = 0; $los_cnt < $num_lose; $los_cnt++) {
            $combo_list[$random_combo][] = 0;
        }
        
        shuffle($combo_list[$random_combo]);
        
        return $combo_list[$random_combo];
    }
    
    public function getUserWheelDetails($user_id)
    {
        $ticket_num = 7;
        $win_amt    = 250000;
        $min_amt    = $win_amt / 10;
        
        $mult_ng    = 0;
        $mult_1     = $min_amt;
        $mult_2     = $min_amt * 2;
        $mult_3     = $min_amt * 3;
        $mult_4     = $min_amt * 4;
        $mult_5     = $min_amt * 5;
        $mult_jp    = $min_amt * 10;
        
        $srv_resp['sts']            = 1;
        $srv_resp['spin_result']    = $this->calculateTicketRng($ticket_num, $win_amt);
        $srv_resp['spinr_lbl']      = array();
        $srv_resp['spinr_val']      = array(
            $mult_1,
            $mult_2,
            $mult_5,
            $mult_3,
            $mult_ng,
            $mult_1,
            $mult_4,
            $mult_ng,
            $mult_jp,
            $mult_ng,
            $mult_5,
            $mult_ng,
            $mult_4,
            $mult_ng,
            $mult_2,
            $mult_3,
            $mult_ng,
        );
        
        foreach ($srv_resp['spinr_val'] as $spinr) {
            
            if ($mult_ng == $spinr) {
                $srv_resp['spinr_lbl'][]    = 'LOSE';
            }
            else if ($mult_jp == $spinr) {
                $srv_resp['spinr_lbl'][]    = 'JACKPOT';
            }
            else {
                $srv_resp['spinr_lbl'][]    = number_format($spinr, 0);
            }
        }
        
        return $srv_resp;
    }
}
