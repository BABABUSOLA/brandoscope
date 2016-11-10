<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Pin extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'pins';
	protected $fillable = array('id','news_id','user_id');

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	public function news()
	{
		return $this->belongsTo('News','news_id');
	}
	
}
