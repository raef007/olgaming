<?php

class Popup extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table        = 'POPUP';
    protected $primaryKey   = 'p_seq';
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
        if (0 != $data['p_seq']) {
            $popup_db   = self::find($data['p_seq']);
        }
        else {
            $popup_db   = new Popup();
        }
        
        /*  Saves Data to the Database  */
        $popup_db->site_id              = $data['site_id'];
        $popup_db->subject              = $data['subject'];
        $popup_db->img_path             = $data['img_path'];
        $popup_db->size_width           = $data['size_width'];
        $popup_db->size_height          = $data['size_height'];
        $popup_db->x_position           = $data['x_position'];
        $popup_db->y_position           = $data['y_position'];
        $popup_db->start_date           = $data['start_date'];
        $popup_db->end_date             = $data['end_date'];
        
        $popup_db->scrool_flag          = $data['scrool_flag'];
        $popup_db->sort_machine         = $data['sort_machine'];
        $popup_db->sort_popup           = $data['sort_popup'];
        $popup_db->show_flag            = $data['show_flag'];
        $popup_db->ordering             = $data['ordering'];
        $popup_db->link_target_code     = $data['link_target_code'];
        $popup_db->link_address         = $data['link_address'];
        $popup_db->text                 = $data['text'];
        
        $popup_db->reg_date             = date('Ymd');        
        $popup_db->reg_datetime         = time();
        
        $sts            = $popup_db->save();
        $primary_key    = $popup_db->p_seq;
        
        return $primary_key;
    }
    
    public function deleteRecord($p_seq)
    {
        $site = self::where('p_seq', $p_seq)
            ->delete();
    }
    
    public function updateImage($site_id, $filename)
    {
        
    }

}
