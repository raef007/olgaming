<?php

class SmsLog extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table        = 'SMS_CERTIFICATION_LOG';
    protected $primaryKey   = 'scl_seq';
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
        if (0 != $data['scl_seq']) {
            $sms_db  = self::find($data['scl_seq']);
        }
        else {
            $sms_db  = new SmsLog();
        }
        
        /*  Saves Data to the Database  */
        $sms_db->site_id                = $data['site_id'];
        $sms_db->user_id                = $data['user_id'];
        $sms_db->ip                     = $data['ip'];
        $sms_db->certification_number   = $data['certification_number'];
        $sms_db->telephone              = $data['telephone'];
        
        $sms_db->reg_date               = date('Ymd');        
        $sms_db->reg_datetime           = time();
        
        $sts            = $sms_db->save();
        $primary_key    = $sms_db->scl_seq;
        
        return $primary_key;
    }
    
    public function deleteRecord($scl_seq)
    {
        $site = self::where('scl_seq', $scl_seq)
            ->delete();
    }
    
}
