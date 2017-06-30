<?php

class SiteUrl extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table        = 'SITE_URL';
    protected $primaryKey   = 'su_seq';
	public $timestamps      = false;

	public function testRecord()
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
        if (0 != $data['su_seq']) {
            $site_db    = self::find($data['su_seq']);
        }
        else {
            $site_db    = new SiteUrl();
        }
        
        /*  Saves Data to the Database  */
        $site_db->site_id           = $data['site_id'];
        $site_db->site_url          = $data['site_url'];
        $site_db->page_of_manage    = $data['page_of_manage'];
        $site_db->reg_date          = date('Ymd');
        $site_db->reg_datetime      = time();
        
        $sts            = $site_db->save();
        $primary_key    = $site_db->su_seq;
        
        return $primary_key;
    }
    
    public function deleteRecord($su_seq)
    {
        $site_url = self::where('su_seq', $su_seq)
            ->delete();
    }

}
