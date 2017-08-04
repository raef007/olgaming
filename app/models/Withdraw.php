<?php

class Withdraw extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table        = 'WITHDRAW';
    protected $primaryKey   = 'w_seq';
    public $timestamps      = false;

    public function getAllRecord()
    {
        $data   = self::get();
        
        return $data;
    }
    
    
    
    public function cancelRequest($w_seq)
    {
        $site = self::where('w_seq', $w_seq)
            ->update(array(
                    'cancel_flag'   => 1,
                )
            );
    }
    public function updateStatus($w_seq, $sts)
    {
        $upd_col['state_code']      = $sts;
        
        if (2 == $sts) {
            $upd_col['wait_date']   = date('Ymd');
        }
        else if (3 == $sts) {
            $upd_col['finish_date'] = date('Ymd');
        }
        
        $site = self::where('w_seq', $w_seq)
            ->update($upd_col);
    }
}
