<?php

class Deposit extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table        = 'DEPOSIT';
    protected $primaryKey   = 'd_seq';
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
        if (0 != $data['f_seq']) {
            $faq_db     = self::find($data['f_seq']);
        }
        else {
            $faq_db     = new Notice();
        }
        
        /*  Saves Data to the Database  */
        $notice_db->site_id            = $data['site_id'];
        $notice_db->admin_id           = $data['title'];
        $notice_db->subject            = $data['subject'];
        $notice_db->order               = $data['order'];
        $notice_db->text               = $data['text'];
        $notice_db->img_path           = $data['img_path'];
        $notice_db->show_flag          = $data['show_flag'];
        $notice_db->reg_date           = date('Ymd'); 
        $notice_db->reg_datetime       = time();
        $notice_db->update_date        = date('Ymd');
        $notice_db->update_datetime    = date('Ymd');
        
        $sts            = $faq_db->save();
        $primary_key    = $faq_db->f_seq;
        
        return $primary_key;
    }
    
    public function deleteRecord($d_seq)
    {
        $site = self::where('d_seq', $d_seq)
            ->delete();
    }
    
    public function cancelRequest($d_seq)
    {
        $site = self::where('d_seq', $d_seq)
            ->update(array(
                    'cancel_flag'   => 1,
                )
            );
    }
    
    public function updateStatus($d_seq, $sts)
    {
        $upd_col['state_code']      = $sts;
        
        if (2 == $sts) {
            $upd_col['wait_date']   = date('Ymd');
        }
        else if (3 == $sts) {
            $upd_col['finish_date'] = date('Ymd');
        }
        
        $site = self::where('d_seq', $d_seq)
            ->update($upd_col);
    }

}
