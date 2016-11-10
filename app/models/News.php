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
	protected $fillable = array('slug','text','pinned_art','category_id','tag_id','user_id');

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
	public function comments()
	{
		return $this->hasMany('Comment','news_id');
	}
	public function pins()
	{
		return $this->hasMany('Pin','news_id');
	}
	public function isPinned($id){
    $how = Pin::where('user_id', '=', Auth::user()->id)->where('news_id', '=', $id)->get();
   if (count($how) > 0){
       return true;
   }
   else{
       return false;
   }
}
}
