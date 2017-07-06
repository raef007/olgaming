<?php

class Site extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table        = 'SITE';
    protected $primaryKey   = 'site_id';
	public $timestamps      = false;

	public function getAllRecord()
    {
        $data   = self::get();
        
        return $data;
    }
    
    public function addUpdateRecord($data)
    {
        /*  Variable Declaration        */
        $sts            = 0;
        $primary_key    = 0;
        
        /*  Instantiate Database Class  */
        if (0 != $data['site_id']) {
            $site_db    = self::find($data['site_id']);
        }
        else {
            $site_db    = new Site();
        }
        
        /*  Saves Data to the Database  */
        $site_db->site_name         = $data['site_name'];
        $site_db->reg_way           = $data['reg_way'];
        $site_db->reg_date          = date('Ymd');
        $site_db->reg_datetime      = time();
        
        $sts            = $site_db->save();
        $primary_key    = $site_db->site_id;
        
        return $primary_key;
    }
    
    public function deleteRecord($site_id)
    {
        $site = self::where('site_id', $site_id)
            ->delete();
    }

}
