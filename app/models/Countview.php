<?php


class Countview extends Eloquent  {

	
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'countview';
	protected $fillable = array('user_id','news_id');

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	public function user()
	{
		return $this->belongsTo('User','user_id');
	}
	public function news()
	{
		return $this->belongsTo('News','news_id');
	}
	

}
