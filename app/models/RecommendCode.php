<?php

class RecommendCode extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table        = 'RECOMMEND';
    protected $primaryKey   = 'r_seq';
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
        if (0 != $data['r_seq']) {
            $code_db  = self::find($data['r_seq']);
        }
        else {
            $code_db  = new RecommendCode();
        }
        
        /*  Saves Data to the Database  */
        $code_db->site_id           = $data['site_id'];
        $code_db->admin_id          = $data['admin_id'];
        $code_db->user_id           = $data['user_id'];
        $code_db->unique_code       = $data['unique_code'];
        $code_db->used_flag         = $data['used_flag'];
        $code_db->reg_date          = date('Ymd');
        //$code_db->reg_datetime      = time();
        
        $sts            = $code_db->save();
        $primary_key    = $code_db->r_seq;
        
        return $primary_key;
    }
    
    public function deleteRecord($r_seq)
    {
        $site = self::where('r_seq', $r_seq)
            ->delete();
    }
}
