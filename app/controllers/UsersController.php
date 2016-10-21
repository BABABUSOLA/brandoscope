<?php
class UsersController extends BaseController
	{
		public function login()
		{
			Return View::make('users.login');
		}
		// public function postLogin()
		// {
		// 	$validator = Validator::make(Input::all(),array('email'=>'required|email','password'=>'required'));
		// 	if($validator->fails())
		// 	{
		// 		return Redirect::route('login')->withErrors($validator)->withInput();

		// 	}
		// 	else
		// 	{
		// 		$remember = (Input::has('remember')) ? true: false;
		// 		$auth = Auth::attempt(array(
		// 			'email'=> Input::get('email'),
		// 			'password'=> Input::get('password')
		// 			), $remember);
		// 		if (!$auth)
		// 			{
		// 			return Redirect::route('login')->with('fail','You entered the wrong email or password');
		// 		    }
		// 		else
		// 		{	
					
		// 			if (1)
		// 				dd(User()->role);
						
		// 			{

		// 				return Redirect::route('userdash');
		// 			}
		// 			if (2)
		// 			 {
						
		// 				return Redirect::route('articlePublisherDashboard');

		// 			}
		// 			if(3)
		// 			{
		// 				return Redirect::route('adminiHome');
		// 			}
					
		// 		}
		
				
		// 	}

		// }
		public function logout()
		{
			Return View::make('users.logout');
		}
		public function forgot()
		{
			Return View::make('users.forgotpassword');
		}
		
		public function homepage()
		{
			Return View::make('admin.homepage');
		}
		public function homepage2()
		{
			Return View::make('users.home');
		}
		public function signup()
		{
			Return View::make('admin.register');
		}
		public function store()
		{
			$data=Input::all(); 
			$data['password']=Hash::make($data['password']);
			$user = new User;
			$user->fill($data);
			$user->save();

			
				
				return Redirect::to('login')->withMessage('Registration successful. Please login!');
			// }
			// 	else
			// 	{
			// 		//if validation fails
			// 		$message=$validator->message();
			// 		Input::flash();
			// 		return View::make('users.landingpage');
			// 	}

			}
			public function authenticate()
			{
				
				$remember = (Input::has('remember')) ? true: false;
				 if (Auth::attempt(array('email' => Input::get('email'),'password' => Input::get('password')),$remember))
				 {
				 	//fetch user profile details
				 	$user = Auth::user();
				 	$user->save();
				 	
					
					
					if (Auth::User()->role_id === 1)
					
					{

						return Redirect::route('userdash');
					}
					if (Auth::User()->role_id === 2)
					 {
						
						return Redirect::route('articleDashboard');

					}
					if(Auth::User()->role_id === 3)
					{
						return Redirect::route('adminiHome');
					}
				
					else
						{
					return Redirect::route('login')->with('fail','You entered the wrong email or password');
				    }
				
				
			
				 }
				 
				 return View::make('users.login')->withErrors('Invalid email or password');
			}
			public function contacts()
			{
				Return View::make('users.contact');
			}
			public function adminhomepage()
			{
				Return View::make('admin.adminiHome');
			}
			public function userdash()
			{	
				$user = User::all();
				$news = News::paginate(15);
				$newSearchs = News::orderBy('id','desc')->take(10)->get();
				$arts = News::orderBy('id','desc')->take(5)->get();
				$categories = Category::paginate(20);
				Return View::make('users.userdashboard')->with('categories',$categories)->with('arts',$arts)->with('news',$news)->with('newSearchs',$newSearchs)->with('user',$user);
			}
			public function useraccount()
			{	
				$user = User::get();
				$news = News::paginate(15);
				$newSearchs = News::orderBy('id','desc')->take(5)->get();
				$arts = News::orderBy('id','desc')->take(20)->get();
				$categories = Category::paginate(20);
				Return View::make('users.useraccount')->with('categories',$categories)->with('arts',$arts)->with('news',$news)->with('newSearchs',$newSearchs)->with('user',$user);
			}
			
	}