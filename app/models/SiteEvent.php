<?php

class SiteEvent extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table        = 'EVENT';
    protected $primaryKey   = 'e_seq';
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
            $faq_db     = new Event();
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
    
    public function deleteRecord($e_seq)
    {
        $site = self::where('e_seq', $e_seq)
            ->delete();
    }

}
