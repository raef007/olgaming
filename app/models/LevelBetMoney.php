<?php

class LevelBetMoney extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table        = 'LEVEL_BET_MONEY';
    protected $primaryKey   = 'lvm_seq';
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
        if (0 == $data['lvm_seq']) {
            $lvm_db                 = new LevelBetMoney();
            
            /*  Saves Data to the Database  */
            $lvm_db->site_id                        = $data['site_id'];
            $lvm_db->level                          = $data['level'];
            $lvm_db->sort                           = $data['sort'];
            $lvm_db->realtime_min_bet_money         = $data['realtime_min_bet_money'];
            $lvm_db->realtime_max_bet_money         = $data['realtime_max_bet_money'];
            $lvm_db->sport_min_bet_money            = $data['sport_min_bet_money'];
            $lvm_db->sport_max_bet_money            = $data['sport_max_bet_money'];
            $lvm_db->member_ppochi_percent          = $data['member_ppochi_percent'];
            $lvm_db->recommand_mem_ppochi_percent   = $data['recommand_mem_ppochi_percent'];
            $lvm_db->daily_first_deposit_percent    = $data['daily_first_deposit_percent'];
            $lvm_db->reg_date                       = date('Ymd');
            $lvm_db->reg_datetime                   = time();
            
            $sts                    = $lvm_db->save();
        }
        else {
            /*  Saves Data to the Database  */
            $lvm_db                                 = self::find($data['lvm_seq']);
            
            $lvm_db->site_id                        = $data['site_id'];
            $lvm_db->level                          = $data['level'];
            $lvm_db->sort                           = $data['sort'];
            $lvm_db->realtime_min_bet_money         = $data['realtime_min_bet_money'];
            $lvm_db->realtime_max_bet_money         = $data['realtime_max_bet_money'];
            $lvm_db->sport_min_bet_money            = $data['sport_min_bet_money'];
            $lvm_db->sport_max_bet_money            = $data['sport_max_bet_money'];
            $lvm_db->member_ppochi_percent          = $data['member_ppochi_percent'];
            $lvm_db->recommand_mem_ppochi_percent   = $data['recommand_mem_ppochi_percent'];
            $lvm_db->daily_first_deposit_percent    = $data['daily_first_deposit_percent'];
            
            $sts                    = $lvm_db->save();
        }
        
        $primary_key    = $data['lvm_seq'];
        
        return $primary_key;
    }
    
    public function deleteRecord($lvm_seq)
    {
        $site = self::where('lvm_seq', $lvm_seq)
            ->delete();
    }

}
