<?php

class ContactsController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	public function getContacts()
			{
				Return View::make('users.contact');
			}
	public function getContactUsForm()
	{
		//get all the input data and store it inside store variable
		$data = Input::all();

		//validation rules
		$rules = array(
			'name' => 'required|alpha',
			'mobile_phone'=>'numeric|min:8',
			'email' => 'required|email',
			'message' => 'required|min:25'

			);
		//validate data
		$validator = Validator::make($data,$rules);

		//if everything is correct that run passes.
		if($validator->passes())
		{
			//send mail  using laravel send function
			Mail::send('emails.contacts', $data, function($message) use ($data)
			{
				//email 'from' fiield: Get users email add and name
				$message->from($data['email'], $data['name']);
				//email 'to' field: emails to be notified
				$message->to('sci@brandoscope.com','sci')->cc('sci@brandoscope.com')->subject('Contact Request');
			});
		
			return View::make('users.contact')->with('message','message sent successfully');

		}
		else
		{
			//return contact form with errors
			return Redirect::to('contact')->withErrors($validator);
		}
	}
}
