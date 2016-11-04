<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';
	protected $fillable = array('first_name','last_name','email','mobile_phone','password','role_id','user_id'); 

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $dates=['deleted_at'];
	public static $rules= array(
		'email'=>'required|max:64|unique:user,email|email',
		'password'=>'required|min:6|password_confirmation',
		);
	
	protected $hidden = array('password', 'remember_token');
	public function role()
   {
       return $this->belongsTo('Role', 'role_id');
   }
   public function news()
	{
		return $this->hasOne('News','user_id');
		
	}
	public function comments()
	{
		return $this->hasMany('Comment','user_id');
	}


}
