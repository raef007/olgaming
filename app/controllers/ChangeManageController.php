<?php

class ChangeManageController extends BaseController {
    
    public function searchChargeMng()
    {
        $all_req_count      = 0;
        $all_wait_count     = 0;
        $all_done_count     = 0;
        $limit              = 3;
        $srv_resp           = new stdClass();
        
        $post_data  = Input::all();
        
        $all_sites  = DB::table('SITE')->get();
        
        foreach($all_sites as $site) {
            $query  = DB::table('DEPOSIT')
                ->select('*', 'DEPOSIT.reg_date', 'DEPOSIT.money')
                ->where('DEPOSIT.site_id', $site->site_id)
                ->join('MEMBER', 'member.user_id', '=', 'DEPOSIT.user_id');
                
            if ('' != $post_data['from']) {
                $query->where('DEPOSIT.reg_date', '>=', $post_data['from']);
            }
                
            if ('' != $post_data['to']) {
                $query->where('DEPOSIT.reg_date', '<=', $post_data['to']);
            }
            
            if (isset($post_data['deposit_level'])) {
                $query->where('MEMBER.deposit_level', '=', $post_data['deposit_level']);
            }
            
            if ((isset($post_data['filter_by']))
            && (isset($post_data['filter_val']))) {
                if (('' != $post_data['filter_val'])
                && ('' != $post_data['filter_val'])) {
                    $query->where($post_data['filter_by'], 'like', '%'.$post_data['filter_val'].'%');
                }
            }
            
            $deposits           = $query->get();
            
            $site->requests     = array();
            $site->standbys     = array();
            $site->completeds   = array();
            
            foreach ($deposits as $deposit) {
                
                if ('' != $deposit->finish_date) {
                    $site->completeds[] = $deposit;
                }
                else if ('' != $deposit->wait_date) {
                    $site->standbys[]   = $deposit;
                }
                else {
                    $site->requests[]   = $deposit;
                }
            }
            
            $site->limit        = $limit;
            
            $site->req_count    = count($site->requests);
            $site->wait_count   = count($site->standbys);
            $site->done_count   = count($site->completeds);
            
            $all_req_count      += $site->req_count;
            $all_wait_count     += $site->wait_count;
            $all_done_count     += $site->done_count;
            
            $site->req_offset   = 0;
            $site->wait_offset  = 0;
            $site->done_offset  = 0;
            
            $site->req_max      = floor($site->req_count / $site->limit);
            $site->wait_max     = floor($site->wait_count / $site->limit);
            $site->done_max     = floor($site->done_count / $site->limit);
            
            if (0 == ($site->req_count % $site->limit)) {
                $site->req_max     = $site->req_max - 1;
            }
            
            if (0 == ($site->wait_count % $site->limit)) {
                $site->wait_max     = $site->wait_max - 1;
            }
            
            if (0 == ($site->done_count % $site->limit)) {
                $site->done_max     = $site->done_max - 1;
            }
            
            for ($count = 0; $count <= $site->req_max; $count++) {
                $site->req_pages[]  = $count;
            }
            
            for ($count = 0; $count <= $site->wait_max; $count++) {
                $site->wait_pages[]  = $count;
            }
            
            for ($count = 0; $count <= $site->done_max; $count++) {
                $site->done_pages[]  = $count;
            }
        }
        
        $srv_resp->sites        = $all_sites;
        
        $srv_resp->limit        = $limit;
        
        $srv_resp->req_count    = $all_req_count;
        $srv_resp->wait_count   = $all_wait_count;
        $srv_resp->done_count   = $all_done_count;
        
        $srv_resp->req_offset   = 0;
        $srv_resp->wait_offset  = 0;
        $srv_resp->done_offset  = 0;
        
        $srv_resp->req_max      = floor($srv_resp->req_count / $srv_resp->limit);
        $srv_resp->wait_max     = floor($srv_resp->wait_count / $srv_resp->limit);
        $srv_resp->done_max     = floor($srv_resp->done_count / $srv_resp->limit);
        
        if (0 == ($srv_resp->req_count % $site->limit)) {
            $srv_resp->req_max     = $srv_resp->req_max - 1;
        }
        
        if (0 == ($srv_resp->wait_count % $srv_resp->limit)) {
            $srv_resp->wait_max     = $srv_resp->wait_max - 1;
        }
        
        if (0 == ($srv_resp->done_count % $srv_resp->limit)) {
            $srv_resp->done_max     = $srv_resp->done_max - 1;
        }
        
        for ($count = 0; $count <= $srv_resp->req_max; $count++) {
            $srv_resp->req_pages[]  = $count;
        }
        
        for ($count = 0; $count <= $srv_resp->wait_max; $count++) {
            $srv_resp->wait_pages[]  = $count;
        }
        
        for ($count = 0; $count <= $srv_resp->done_max; $count++) {
            $srv_resp->done_pages[]  = $count;
        }
        
        return json_encode($srv_resp);
    }
    
    public function cancelDeposit($step_list)
    {
        $deposit_db       = new Deposit();
        
        $srv_resp       = new stdClass();
        $post_data      = Input::all();
        
        foreach ($post_data as $site) {
            
            if (isset($site[$step_list])) {
                foreach ($site[$step_list] as $request) {
                    if (isset($request['deposit_check'])) {
                        if ('1' == $request['deposit_check']) {
                            $deposit_db->cancelRequest($request['d_seq']);
                        }
                    }
                }
            }
        }
        
        $srv_resp->sts = 1;
        
        return json_encode($srv_resp);
    }
    
    public function setStatus($step_list, $sts)
    {
        $deposit_db       = new Deposit();
        
        $srv_resp       = new stdClass();
        $post_data      = Input::all();
        
        foreach ($post_data as $site) {
            
            if (isset($site[$step_list])) {
                foreach ($site[$step_list] as $request) {
                    if (isset($request['deposit_check'])) {
                        if ('1' == $request['deposit_check']) {
                            $deposit_db->updateStatus($request['d_seq'], $sts);
                        }
                    }
                }
            }
        }
        
        $srv_resp->sts = 1;
        
        return json_encode($srv_resp);
    }
    
    public function downloadExcel()
    {
        $deposit_db       = new Deposit();
        
        $srv_resp       = new stdClass();
        $post_data      = Input::all();
        
        $filename       = 'Charge-Management-'.date('Y-m-d');
        
        $excel          = Excel::create($filename);
        
        foreach ($post_data as $site) {
            
            $excel->sheet($site['site_name'], function($sheet) use($site) {
                $req_data       = array();
                $wait_data      = array();
                $done_data      = array();
                
                $req_data[0]    = array(
                    '사이트',
                    '금액대',
                    '입금계좌',
                    '입금자',
                    '입금금액',
                    '아이디',
                    '닉네임',
                    '회원레벨',
                    '중복',
                    '등록일시',
                    '상태',
                );
                
                $wait_data[0]   = array(
                    '',
                    '사이트',
                    '금액대',
                    '입금계좌',
                    '입금자',
                    '입금금액',
                    '아이디',
                    '닉네임',
                    '회원레벨',
                    '중복',
                    '등록일시',
                    '처리일시',
                    '상태',
                );
                
                $done_data[0]   = array(
                    '',
                    '사이트',
                    '금액대',
                    '입금계좌',
                    '입금자',
                    '입금금액',
                    '아이디',
                    '닉네임',
                    '회원레벨',
                    '중복',
                    '등록일시',
                    '상태',
                );
                
                /*  Sets the data array for Excel consumption   */
                foreach ($site['requests'] as $req) {
                    $req_data[] = array(
                        $site['site_name'],
                        $req['deposit_level'],
                        $req['bank_name'],
                        $req['bank_owner'],
                        $req['money'],
                        $req['username'],
                        $req['nickname'],
                        $req['member_level'],
                        '0',
                        $req['reg_date'],
                        $req['cancel_flag'],
                    );
                }
                
                foreach ($site['standbys'] as $req) {
                    $wait_data[] = array(
                        '',
                        $site['site_name'],
                        $req['deposit_level'],
                        $req['bank_name'],
                        $req['bank_owner'],
                        $req['money'],
                        $req['username'],
                        $req['nickname'],
                        $req['member_level'],
                        '0',
                        $req['reg_date'],
                        $req['wait_date'],
                        $req['cancel_flag'],
                    );
                }
                
                foreach ($site['completeds'] as $req) {
                    $done_data[] = array(
                        '',
                        $site['site_name'],
                        $req['deposit_level'],
                        $req['bank_name'],
                        $req['bank_owner'],
                        $req['money'],
                        $req['username'],
                        $req['nickname'],
                        $req['member_level'],
                        '0',
                        $req['reg_date'],
                        $req['cancel_flag'],
                    );
                }
            
                $sheet->fromArray($req_data, null, 'B3', true, false);
                $sheet->cell('A2', function($cell) {
                    $cell->setValue('Requests');

                });
                
                $sheet->appendRow(array(''));
                $sheet->appendRow(array(
                    'Standby'
                ));
                $sheet->rows($wait_data, 'B5');
                
                $sheet->appendRow(array(''));
                $sheet->appendRow(array(
                    'Complete'
                ));
                $sheet->rows($done_data);
            });
        }
        
        $excel->store('xlsx', public_path('assets/charge-mng'));
        
        $srv_resp->filename = $filename.'.xlsx';
        
        return json_encode($srv_resp);
    }
    
	public function downloadFile($path, $filename)
    {
        $download = 'assets/'.$path.'/'.$filename;	// get path
        
        if(file_exists($download)){
            return Response::download($download, $filename);	// stream for download
        } else {
            App::abort(403, 'File not found.');
        }
	}
    
}