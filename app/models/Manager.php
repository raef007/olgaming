<?php

class Manager extends Eloquent {
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table        = 'MANAGER';
    protected $primaryKey   = 'admin_id';
	public $timestamps      = false;

	public function getRecord($id)
    {
        $data   = self::find($id);
        
        return $data;
    }

    public function addRecord($data)
    {
        $sts            = 0;
        $primary_key    = 0;
        
		$mng_db    = new Manager();

        $mng_db->admin_id       = $data['admin_id'];
        $mng_db->pwd            = $data['pwd'];
        $mng_db->nick_name      = $data['nick_name'];
        $mng_db->use_flag       = $data['use_flag'];
        $mng_db->name           = $data['name'];
        $mng_db->reg_date       = date('Ymd');
        $mng_db->reg_datetime   = time();
        
        $sts            = $mng_db->save();
        $primary_key    = $mng_db->admin_id;
        
        return $primary_key;
    }

    public function updateUseFlag($data)
    {
        $manager    = self::find($data['admin_id']);
        
        $manager->use_flag  = $data['use_flag'];
        $manager->save();
    }
    
}
