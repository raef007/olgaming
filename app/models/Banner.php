<?php

class Banner extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table        = 'BANNER';
    protected $primaryKey   = 'b_seq';
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
        if (0 != $data['b_seq']) {
            $banner_db  = self::find($data['b_seq']);
        }
        else {
            $banner_db  = new Banner();
        }
        
        /*  Saves Data to the Database  */
        $banner_db->site_id             = $data['site_id'];
        $banner_db->admin_id            = $data['admin_id'];
        $banner_db->subject             = $data['subject'];
        $banner_db->img_path            = $data['img_path'];
        $banner_db->sort_of_banner      = $data['sort_of_banner'];
        $banner_db->start_date          = $data['start_date'];
        $banner_db->end_date            = $data['end_date'];
        
        $banner_db->ink_target          = $data['ink_target'];
        $banner_db->ordering            = $data['ordering'];
        $banner_db->show_flag           = $data['show_flag'];
        //$popup_db->text                 = $data['text'];
        
        $banner_db->reg_date            = date('Ymd');
        $banner_db->reg_datetime        = time();
        
        $sts            = $banner_db->save();
        $primary_key    = $banner_db->b_seq;
        
        return $primary_key;
    }
    
    public function deleteRecord($b_seq)
    {
        $site = self::where('b_seq', $b_seq)
            ->delete();
    }
    
    public function updateImage($site_id, $filename)
    {
        
    }

}
