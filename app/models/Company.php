<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Company extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'companies';
	protected $fillable = array('name','user_id','address','website');

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	
	
	public static $rules= array(
		'name'=>'required|max:15|unique:companies,name',
		'website'=>'required|url',
		);
	public function user()
	{
		return $this->belongsTo('User','user_id');
	}
}
