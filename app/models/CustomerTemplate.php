<?php

class CustomerTemplate extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table        = 'CUSTOMER_C_TEMPLATE';
    protected $primaryKey   = 'cct_seq';
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
        if (0 != $data['cct_seq']) {
            $template_db    = self::find($data['cct_seq']);
        }
        else {
            $template_db    = new CustomerTemplate();
        }
        
        /*  Saves Data to the Database  */
        $template_db->site_id         = $data['site_id'];
        $template_db->subject         = $data['subject'];
        $template_db->text            = $data['text'];
        
        $template_db->reg_date        = date('Ymd');        
        $template_db->reg_datetime    = time();
        
        $sts            = $template_db->save();
        $primary_key    = $template_db->cct_seq;
        
        return $primary_key;
    }
    
    public function deleteRecord($cct_seq)
    {
        $site = self::where('cct_seq', $cct_seq)
            ->delete();
    }

}
