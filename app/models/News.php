<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class News extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'news';
	protected $fillable = array('slug','text','category_id','tag_id','user_id');

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	
	public function category()
	{
		return $this->belongsTo('Category','category_id');

	}
	public function user()
	{
		return $this->belongsTo('User','user_id');
		
	}

}
