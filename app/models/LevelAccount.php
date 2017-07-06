<?php

class LevelAccount extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table        = 'LEVEL_ACCOUNT';
    //protected $primaryKey   = '';
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
        
        $acc_db         = self::where('site_id', $data['site_id'])
            ->where('level', $data['level'])
            ->first();

        /*  Instantiate Database Class  */
        if (!$acc_db) {
            $acc_db    = new LevelAccount();
            
            /*  Saves Data to the Database  */
            $acc_db->site_id        = $data['site_id'];
            $acc_db->level          = $data['level'];
            $acc_db->bank_name      = $data['bank_name'];
            $acc_db->bank_account   = $data['bank_account'];
            $acc_db->bank_owner     = $data['bank_owner'];
            $acc_db->reg_date       = date('Ymd');
            $acc_db->reg_datetime   = time();
            
            $sts            = $acc_db->save();
        }
        else {
            $sts    = self::where('site_id', $data['site_id'])
                ->where('site_id', $data['site_id'])
                ->where('level', $data['level'])
                ->update(
                    array(
                        'site_id'       => $data['site_id'],
                        'level'         => $data['level'],
                        'bank_name'     => $data['bank_name'],
                        'bank_account'  => $data['bank_account'],
                        'bank_owner'    => $data['bank_owner']
                    )
                );
        }
        
        $primary_key    = $data['site_id'];
        
        return $primary_key;
    }
    
    public function deleteRecord($site_id)
    {
        $site = self::where('site_id', $site_id)
            ->delete();
    }

}
