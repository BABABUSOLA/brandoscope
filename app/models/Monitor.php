<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Monitor extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'monitor';
	protected $fillable = array('keyword','frequency','email','phone_number','company_id');

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	
	
}
