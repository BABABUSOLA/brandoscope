<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Company_phone extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'company_phones';
	protected $fillable = array('company_id','phone_number','description');

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	
	

}
