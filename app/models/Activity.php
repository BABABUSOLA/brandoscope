<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Activity extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'activities';
	protected $fillable = array('authenticated_user_id','activity_user_id','activity_type_id');

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	
	public function userauth()
	{
		return $this->belongsTo('User','authenticated_user_id');
	}
	
	public function useract()
	{
		return $this->belongsTo('User','activity_user_id');
	}
	public function acttype()
	{
		return $this->belongsTo('Activitytype','activity_type_id');
	}

	public function notification($data=[])
	{
		$act= new Activity;
		$act->fill($data);
		$act->save();
		return $act;

	}

}
