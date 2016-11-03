<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}
	public function __construct()
	{
		if (Auth::check())
		{
			$user =Auth::user();
			View::share('authUser',$user);
			Session::put('userid',$user->id);
			Session::put('roleid',$user->role_id);

		}
	}


}
