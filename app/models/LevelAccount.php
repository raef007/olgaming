<?php

class LevelAccount extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table        = 'LEVEL_ACCOUNT';
    protected $primaryKey   = 'la_seq';
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
        if (0 == $data['la_seq']) {
            $acc_db                 = new LevelAccount();
            
            /*  Saves Data to the Database  */
            $acc_db->site_id        = $data['site_id'];
            $acc_db->level          = $data['level'];
            $acc_db->bank_name      = $data['bank_name'];
            $acc_db->bank_account   = $data['bank_account'];
            $acc_db->bank_owner     = $data['bank_owner'];
            $acc_db->reg_date       = date('Ymd');
            $acc_db->reg_datetime   = time();
            
            $sts                    = $acc_db->save();
        }
        else {
            /*  Saves Data to the Database  */
            $acc_db                 = self::find($data['la_seq']);
            
            $acc_db->site_id        = $data['site_id'];
            $acc_db->level          = $data['level'];
            $acc_db->bank_name      = $data['bank_name'];
            $acc_db->bank_account   = $data['bank_account'];
            $acc_db->bank_owner     = $data['bank_owner'];
            
            $sts                    = $acc_db->save();
        }
        
        $primary_key    = $data['la_seq'];
        
        return $primary_key;
    }
    
    public function deleteRecord($la_seq)
    {
        $site = self::where('la_seq', $la_seq)
            ->delete();
    }

}
