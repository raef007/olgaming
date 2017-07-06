<?php

class ManageSite extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table        = 'MANAGE_SITE';
    protected $primaryKey   = 'ms_seq';
	public $timestamps      = false;

	public function getRecord($id)
    {
        $data   = self::find($id);
        
        return $data;
    }
    
    public function addRecord($data)
    {
        /*  Variable Declaration        */
        $sts            = 0;
        $primary_key    = 0;
        
        /*  Instantiate Database Class  */
        $site_db    = new ManageSite();
        
        /*  Saves Data to the Database  */
        $site_db->admin_id          = $data['admin_id'];
        $site_db->site_id           = $data['site_id'];
        $site_db->reg_date          = date('Ymd');
        $site_db->reg_datetime      = time();
        
        $sts            = $site_db->save();
        $primary_key    = $site_db->ms_seq;
    }

    public function deleteRecord($data)
    {
        $site_url = self::where('ms_seq', $data)
            ->delete();
    }
    
    public function getRecordsBySiteId($site_id)
    {
        $data   = self::where('site_id', $site_id)
            ->get();
        
        return $data;
    }
    
    public function getPagedMngSite($limit, $offset)
    {
        $data   = DB::table('MANAGE_SITE')
            ->select(
                'MANAGER.admin_id',
                'MANAGER.pwd',
                'MANAGER.use_flag',
                'MANAGER.nick_name',
                'MANAGER.name',
                
                'MANAGE_SITE.ms_seq',
                'MANAGE_SITE.site_id',
                
                'SITE.site_name'
            )
            ->join('MANAGER', 'MANAGER.admin_id', '=', 'MANAGE_SITE.admin_id')
            ->join('SITE', 'SITE.site_id', '=', 'MANAGE_SITE.site_id')
            ->take($limit)
            ->offset($offset)
            ->get();
            
        return $data;
    }
    
    public function getPagedMngSiteBySiteId($site_id, $limit, $offset)
    {
        $data   = DB::table('MANAGE_SITE')
            ->select(
                'MANAGER.admin_id',
                'MANAGER.pwd',
                'MANAGER.use_flag',
                'MANAGER.nick_name',
                'MANAGER.name',
                
                'MANAGE_SITE.ms_seq',
                'MANAGE_SITE.site_id',
                
                'SITE.site_name'
            )
            ->join('MANAGER', 'MANAGER.admin_id', '=', 'MANAGE_SITE.admin_id')
            ->join('SITE', 'SITE.site_id', '=', 'MANAGE_SITE.site_id')
            ->where('MANAGE_SITE.site_id', $site_id)
            ->take($limit)
            ->offset($offset)
            ->get();
            
        return $data;
    }

}
