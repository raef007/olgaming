<?php

class Faq extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table        = 'FAQ';
    protected $primaryKey   = 'f_seq';
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
            $faq_db     = new Faq();
        }
        
        /*  Saves Data to the Database  */
        $faq_db->site_id            = $data['site_id'];
        $faq_db->title              = $data['title'];
        $faq_db->text               = $data['text'];
        $faq_db->sort               = $data['sort'];
        $faq_db->show_flag          = $data['show_flag'];
        $faq_db->reg_date           = date('Ymd');        
        $faq_db->reg_datetime       = time();
        $faq_db->update_date        = date('Ymd');
        $faq_db->update_datetime    = date('Ymd');
        
        $sts            = $faq_db->save();
        $primary_key    = $faq_db->f_seq;
        
        return $primary_key;
    }
    
    public function deleteRecord($f_seq)
    {
        $site = self::where('f_seq', $f_seq)
            ->delete();
    }

}
