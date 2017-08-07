<?php
class PointUseLogController extends BaseController {

    public function showGetPUL()
        {
            $limit          = 3;
            $all_pul    = 0;        
            $srv_resp       = new stdClass();
            $site_db        = new Site();        
            $all_sites      = DB::table('SITE')->get();
            
            foreach($all_sites as $site) {
            
                $site->points = DB::table('POINT_HISTORY')
                    ->where('POINT_HISTORY.site_id', $site->site_id)
                    ->join('MEMBER', 'MEMBER.user_id', '=', 'POINT_HISTORY.user_id')                
                    ->get();
                
                $site->point_count    = count($site->points);
                $site->offset       = 0;
                $site->limit        = $limit;
                $site->max_page     = floor($site->point_count / $site->limit);
                
                $all_pul        += $site->point_count;
                
                if (0 == ($site->point_count % $site->limit)) {
                    $site->max_page    = $site->max_page - 1;
                }
                
                for ($count = 0; $count <= $site->max_page; $count++) {
                    $site->pages[]  = $count;
                }
            }
            
            $srv_resp->sites        = $all_sites;
            
            $srv_resp->point_count    = $all_pul;
            $srv_resp->offset       = 0;
            $srv_resp->limit        = $limit;
            $srv_resp->max_page     = floor($srv_resp->point_count / $srv_resp->limit);
            
            if (0 == ($srv_resp->point_count % $srv_resp->limit)) {
                $srv_resp->max_page    = $srv_resp->max_page - 1;
            }
            
            for ($count = 0; $count <= $srv_resp->max_page; $count++) {
                $srv_resp->pages[]  = $count;
            }
            
            return json_encode($srv_resp);
        }

    public function searchPUL()
    {
        $post_data      = Input::all();
        $limit          = 3;
        $all_pul        = 0;        
        $srv_resp       = new stdClass();
        $site_db        = new Site();        
        $all_sites      = DB::table('SITE')->get();
        
        foreach($all_sites as $site) {
            $pul_query = DB::table('POINT_HISTORY')
                ->where('POINT_HISTORY.site_id', $site->site_id)
                ->join('MEMBER', 'MEMBER.user_id', '=', 'POINT_HISTORY.user_id');
            
            if ('' != $post_data['from']) {
                $pul_query->where('POINT_HISTORY.reg_date', '>=', $post_data['from']);
            }
                
            if ('' != $post_data['to']) {
                $pul_query->where('POINT_HISTORY.reg_date', '<=', $post_data['to']);
            }
            
            if ((isset($post_data['filter_by']))
            && (isset($post_data['filter_val']))) {
                if (('' != $post_data['filter_by'])
                && ('' != $post_data['filter_val'])) {
                    $pul_query->where($post_data['filter_by'], 'like', '%'.$post_data['filter_val'].'%');
                }
            }
            
            $site->points         = $pul_query->get();
            $site->point_count    = count($site->points);
                $site->offset       = 0;
                $site->limit        = $limit;
                $site->max_page     = floor($site->point_count / $site->limit);
                
                $all_pul        += $site->point_count;
                
                if (0 == ($site->point_count % $site->limit)) {
                    $site->max_page    = $site->max_page - 1;
                }
                
                for ($count = 0; $count <= $site->max_page; $count++) {
                    $site->pages[]  = $count;
                }
            }
            
            $srv_resp->sites        = $all_sites;
            
            $srv_resp->point_count    = $all_pul;
            $srv_resp->offset       = 0;
            $srv_resp->limit        = $limit;
            $srv_resp->max_page     = floor($srv_resp->point_count / $srv_resp->limit);
            
            if (0 == ($srv_resp->point_count % $srv_resp->limit)) {
                $srv_resp->max_page    = $srv_resp->max_page - 1;
            }
            
            for ($count = 0; $count <= $srv_resp->max_page; $count++) {
                $srv_resp->pages[]  = $count;
            }
            
            return json_encode($srv_resp);
        }
    public function downloadExcel()
    {
        
        $srv_resp       = new stdClass();
        $post_data      = Input::all();
        
        $filename       = 'Point Exchange Log-'.date('Y-m-d');
        
        $excel          = Excel::create($filename);
        
        foreach ($post_data as $site) {
            
            $excel->sheet($site['site_name'], function($sheet) use($site) {
                $points       = array();      
                $points[0]    = array(
                    '사이트',
                    '레벨',
                    '아이디',
                    '닉네임',
                    '사용 내역',
                    '포인트',
                    '내용',
                    '타입',
                    '비고',
                    '등록일시',
                );
                
                /*  Sets the data array for Excel consumption   */
                foreach ($site['points'] as $point) {
                    $points[] = array(
                        $site['site_name'],
                        $point['member_level'],
                        $point['username'],
                        $point['nickname'],
                        '',
                        $point['point'],
                        '',
                        '',
                        '',
                        $point['reg_datetime'],
                    );
                }
            
                $sheet->fromArray($points, null, 'B3', true, false);
                $sheet->cell('A2', function($cell) {
                    $cell->setValue('points');

                });
                
                $sheet->rows($points);
            });
        }
        
        $excel->store('xlsx', public_path('assets/point-use-log'));
        
        $srv_resp->filename = $filename.'.xlsx';
        
        return json_encode($srv_resp);
    }
    public function downloadFile($path, $filename)
    {
        $download = 'assets/'.$path.'/'.$filename;  // get path
        
        if(file_exists($download)){
            return Response::download($download, $filename);    // stream for download
        } else {
            App::abort(403, 'File not found.');
        }
    }
}