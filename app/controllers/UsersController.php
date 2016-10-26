<?php
class UsersController extends BaseController
	{
		public function login()
		{
			Return View::make('users.login');
		}
	
		public function logout()
		{
			Auth::logout();
			Session::flush();
			Return Redirect::route('freepage');
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
						
						return Redirect::route('authorProfile');
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
				$entertainments = Category::orderBy('id','desc')->where('name', '=', 'entertainment')->first();
				$sports = Category::where('name','=','sports')->first();
				$politics= Category::where('name','=','politics')->first();
				$news_arts = News::orderBy('id','desc')->take(5)->get();
				

				Return View::make('users.userdashboard')->with('categories',$categories)->with('arts',$arts)->with('news',$news)->with('newSearchs',$newSearchs)->with('user',$user)->with('entertainments',$entertainments)->with('news_arts',$news_arts)->with('sports',$sports)->with('politics',$politics);
			}
			public function useraccount()
				{
				$user2 = Auth::User();
				$user = User::get();
				$news = News::paginate(15);
				$newSearchs = News::orderBy('id','desc')->take(5)->get();
				$arts = News::orderBy('id','desc')->take(20)->get();
				$categories = Category::paginate(20);
				Return View::make('users.useraccount')->with('categories',$categories)->with('arts',$arts)->with('news',$news)->with('newSearchs',$newSearchs)->with('user',$user)->with('user2',$user2);
			}
			public function usersearch()
			{
				$keyword = Input::get('keyword');
				$tags = Tag::all();
				$news = News::all();
				$categories = Category::paginate(20);
				$cats  = Category::all();

				$newSearchs = News::orderBy('id','desc')->take(10)->get();
				Return View::make('users.search')->with('news',News::where('slug','LIKE','%'.$keyword.'%')->paginate(10))->with('keyword',$keyword)->with('categories',$categories)->with('cats',$cats)->with('tags',$tags)->with('newSearchs',$newSearchs);
			}
			public function userviewArticle($id)
			{
				$categories = Category::paginate(10);
				$news = News::where('category_id', '=', $id);
				$newArts = News::all();
				// $entertainments = Category::where('slug', '=', 'entertainment')->news;				
				Return View::make('user.userviewarticle')->with('categories',$categories)->with('newArts',$newArts)->with('news',$news);
			}

			public function storeprofile()
		{
			$data=Input::all();
			
			$user = Auth::User();
			$user->fill($data);
			$user->save();
			
				
				return Redirect::route('userdash');
			
			}
	}