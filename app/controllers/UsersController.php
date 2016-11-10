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
			Return View::make('users.registeruser');
		}
		public function signupadmin()
		{
			Return View::make('admin.register');
		}
		public function store()
		{
			$validate = Validator::make(Input::all(), array(
'first_name' => 'required|min:4',
'last_name' => 'required|min:4',
'password' => 'required|min:6',
'confirm_password' => 'required|same:password',
'email' => 'required|unique:users|min:10',
'mobile_phone' => 'required|min:11',
));
if ($validate->fails()) {
	// dd($validate);
return Redirect::route('register')->withErrors($validate)->withInput();
}
else{
}
			$data=Input::all();
			$role_id = $data['role_id'];
			
			$data['password']=Hash::make($data['password']);
			$user = new User;
			$user->fill($data);
			
			$user->save();
			
				// $Activity = new Activity;
				// $Activity->authenticated_user_id = Auth::User()->id;
				// $Activity->activity_type_id = 9;
				// if ($user->save() && $Activity->save())
			{
			$email = Input::get('email');
			$first_name = Input::get('first_name');
			$last_name = Input::get('last_name');
			$fullname = Input::get($first_name ." ". $last_name);
			$app_status = 'successful';
			
			$info = [$email,$first_name];
			$cool= [$fullname,$app_status];
			
				Mail::send('emails.message', ['cool'=>$cool], function($message)use($info)
					
				{
					$message->to($info[0],$info[1])->subject('Welcome to Brandoscope' );
				});
			}
			
			if($role_id === '3')
			{
				
				return View::make('admin.registerAdmin')->with('userid',$user->id);
			}
			else
			{
				return Redirect::to('login')->withMessage('Registration successful. Please login!');
			}
			
				return Redirect::to('register')->withErrors('Invalid input');
			 
			
			}
		public function storeadmin()
		{
			$user = new User;
			$data=Input::all();
			$userid= Session::get('userid');
			
			$data['password']=Hash::make($data['password']);
			$data['user_id']= $userid;
			$user->fill($data);
			$user->save();
			
			if($user->save())
				$activity = new Activity;
				$activity->authenticated_user_id = Auth::User()->id;
				$activity->activity_type_id = 11;
				if ($user->save() && $activity->save())
			{
			$email = Input::get('email');
			$first_name = Input::get('first_name');
			$last_name = Input::get('last_name');
			$fullname = Input::get($first_name ." ". $last_name);
			$app_status = 'successful';
			
			$info = [$email,$first_name];
			$cool= [$fullname,$app_status];
			
				Mail::send('emails.message', ['cool'=>$cool], function($message)use($info)
					
				{
					$message->to($info[0],$info[1])->subject('Welcome to Brandoscope.');
				});
			}
			$Activity = new Activity;
				$Activity->authenticated_user_id = Auth::User()->id;
				$Activity->activity_type_id = 9 || $Activity->activity_type_id = 10 ;
				if ($user->save() && $Activity->save())
				
				return Redirect::to('adminihome')->withMessage('You have successful added a User!');
			
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

			public function admincont()
			{
				$company = new Company;
				$data=Input::all();
				$company->fill($data);
				$company->save();
			
			if($company->save())
			{
			$companyname = Input::get('name');
			$address = Input::get('address');
			$website = Input::get('website');
			$app_status = 'successful';
			
			
			}
			
				
				return Redirect::to('adminihome')->withMessage('Welcome to Brandoscope!');
			}
			public function adminhomepage()
			{
				$userid =Session::get('userid');
				$users = User::orderBy('id','desc')->where('user_id',$userid)->take(5)->get();
				$userscount = User::where('user_id',$userid)->get();
				$user = User::all();
				$pin_arts = Pin::where('user_id','=',Auth::User()->id)->get();
				$news = News::paginate(15);
				$newSearchs = News::orderBy('id','desc')->paginate(15);
				$arts = News::orderBy('id','desc')->take(5)->get();
				$latest_posts = News::orderBy('id','desc')->first();
				$categories = Category::paginate(20);
				

				$entertainments = Category::orderBy('id','desc')->where('name', '=', 'entertainment')->first();
				$notifications = Activity::where('authenticated_user_id', Auth::User()->id)->get();
				
				$sports = Category::where('name','=','sports')->first();
				$politics= Category::where('name','=','politics')->first();
				
				
				Return View::make('admin.adminiHome')->with('users',$users)->with('userscount',$userscount)->with('categories',$categories)->with('arts',$arts)->with('news',$news)->with('user',$user)->with('entertainments',$entertainments)->with('sports',$sports)->with('politics',$politics)->with('latest_posts',$latest_posts)->with('users',$users)->with('notifications',$notifications)->with('newSearchs',$newSearchs)->with('pin_arts',$pin_arts);
			}
			public function userdash()
				{
				$user = User::all();
				$news = News::paginate(15);
				// $news = News::orderBy('id','desc')->take(10)->get();
				$arts = News::orderBy('id','desc')->take(5)->get();
				$categories = Category::paginate(20);
				$pin_arts = Pin::where('user_id','=',Auth::User()->id)->get();

				$entertainments = Category::orderBy('id','desc')->where('name', '=', 'entertainment')->first();
				$sports = Category::where('name','=','sports')->first();
				$politics= Category::where('name','=','politics')->first();
				$news_arts = News::orderBy('id','desc')->take(5)->get();
				
				Return View::make('users.userdashboard')->with('categories',$categories)->with('arts',$arts)->with('news',$news)->with('user',$user)->with('entertainments',$entertainments)->with('news_arts',$news_arts)->with('sports',$sports)->with('politics',$politics)->with('pin_arts',$pin_arts);
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
			
			public function viewArticleAdmin($id)
			{
				$categories = Category::paginate(10);
				
				$new_Admin = News::find($id);
				
				$newArts = News::all();
								
				Return View::make('admin.viewArticleAdmin')->with('categories',$categories)->with('newArts',$newArts)->with('new_Admin',$new_Admin);
			}
			public function userviewArticle($id)
			{
				$categories = Category::paginate(10);
				
				$new = News::find($id);
				
				$newArts = News::all();
								
				Return View::make('users.userviewarticle')->with('categories',$categories)->with('newArts',$newArts)->with('new',$new);
			}
			public function viewArticleCategory($id)
			{
				$categories = Category::paginate(30);
				$newCats = News::where('category_id', '=', $id)->paginate(10);
				$news = News::orderBy('id','desc')->first();
				$newArts = News::all();
							
				Return View::make('users.viewArticleCategory')->with('categories',$categories)->with('news',$news)->with('newArts',$newArts)->with('newCats',$newCats);
			}
			public function storeprofile()
			{
			$data=Input::all();
			
			$user = Auth::User();
			$user->fill($data);
			$user->save();
			
				
				return Redirect::route('userdash');
			
			}
			public function getSearchAdmin()
			{
				$userid =Session::get('userid');
				
			
			
				$arts = News::orderBy('id','desc')->take(5)->get();
				
			

				$keyword = Input::get('keyword');
				$tags = Tag::all();
				$news = News::all();
				$categories = Category::paginate(30);
				$cats  = Category::all();
				$newSearchs = News::orderBy('id','desc')->take(10)->get();
				Return View::make('admin.searchAdmin')->with('news',News::where('slug','LIKE','%'.$keyword.'%')->paginate(10))->with('keyword',$keyword)->with('cats',$cats)->with('tags',$tags)->with('newSearchs',$newSearchs);

			}
	}