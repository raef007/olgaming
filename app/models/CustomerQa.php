<?php

class CustomerQa extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table        = 'CUSTOMER_C_QA';
    protected $primaryKey   = 'ccq_seq';
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
        if (0 != $data['ccq_seq']) {
            $qa_db    = self::find($data['ccq_seq']);
        }
        else {
            $qa_db    = new CustomerQa();
        }
        
        /*  Saves Data to the Database  */
        $qa_db->site_id       = $data['site_id'];
        $qa_db->user_id       = $data['user_id'];
        $qa_db->cc_seq        = $data['cc_seq'];
        $qa_db->answer_flag   = $data['answer_flag'];
        $qa_db->qa_flag       = $data['qa_flag'];
        $qa_db->text          = $data['text'];
        
        $qa_db->reg_date      = date('Ymd');        
        $qa_db->reg_datetime  = time();
        
        $sts            = $qa_db->save();
        $primary_key    = $qa_db->ccq_seq;
        
        return $primary_key;
    }
    
    public function deleteRecord($ccq_seq)
    {
        $site = self::where('ccq_seq', $ccq_seq)
            ->delete();
    }

}
