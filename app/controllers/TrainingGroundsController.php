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
}
