<?php

class IpBlock extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table        = 'IP_BLOCK';
    protected $primaryKey   = 'ipb_seq';
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
        if (0 != $data['ipb_seq']) {
            $ipinfo_db    = self::find($data['ipb_seq']);
        }
        else {
            $ipinfo_db    = new IpBlock();
        }
        
        /*  Saves Data to the Database  */
        $ipinfo_db->site_id     = $data['site_id'];
        $ipinfo_db->ip_num      = $data['ip_num'];
        $ipinfo_db->reason      = $data['reason'];
        $ipinfo_db->status      = 1;
        
        $ipinfo_db->reg_date      = date('Ymd');        
        $ipinfo_db->reg_datetime  = time();
        
        $sts            = $ipinfo_db->save();
        $primary_key    = $ipinfo_db->ipb_seq;
        
        return $primary_key;
    }
    
    public function deleteRecord($ipb_seq)
    {
        $site = self::where('ipb_seq', $ipb_seq)
            ->delete();
    }

}
