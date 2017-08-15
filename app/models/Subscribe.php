<?php

class Subscribe extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table        = 'JOIN_MEMO';
    protected $primaryKey   = 'jm_seq';
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
        if (0 != $data['jm_seq']) {
            $subscribe_db  = self::find($data['jm_seq']);
        }
        else {
            $subscribe_db  = new Subscribe();
        }
        
        /*  Saves Data to the Database  */
        $subscribe_db->site_id             = $data['site_id'];
        $subscribe_db->subject             = $data['subject'];        
        $subscribe_db->text                = $data['text'];    
        $subscribe_db->reg_date            = date('Ymd');
        $subscribe_db->reg_datetime        = time();
        
        $sts            = $subscribe_db->save();
        $primary_key    = $subscribe_db->jm_seq;
        
        return $primary_key;
    }
    
    public function deleteRecord($jm_seq)
    {
        $site = self::where('jm_seq', $jm_seq)
            ->delete();
    }
    
    public function updateImage($site_id, $filename)
    {
        
    }

}
