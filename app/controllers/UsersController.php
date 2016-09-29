<?php
class UsersController extends BaseController
	{
		public function login()
		{
			Return View::make('users.login');
		}
		public function logout()
		{
			Return View::make('users.logout');
		}
		public function forgot()
		{
			Return View::make('users.forgotpassword');
		}
		public function adminLogin()
		{
			Return View::make('admin.login');
		}
		public function homepage()
		{
			Return View::make('admin.homepage');
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
			// retrieve all input
			// $data['password']=Hash::make($data['password']); // hash password
			// $firstname=$data['first_name']; //retrieve first name
			// $lastname=$data['last_name'];  //retrieve last name
			// $email=$data['email'];
			// $mobilephone=$data['mobile_phone'];
			// $password=$data['password']; //store password
			// $roleid=$data['role_id']; // get the hidden role id from form
			// $user = new User; // instance of user model

			
			//get the role_id of the user
			// $data=array('first_name'=>$firstname,'last_name'=>$lastname,'email'=>$email,'mobile_phone'=>$mobilephone,'password'=>$password); //passes this values into the role
			// $validator=Validator::make($data,User::$rules);
			// if($validator->passes())
			// {
			// 	//save the value

			// //save the informationa after getting from form
			// $user->first_name=$firstname;
			// $user->last_name=$lastname;
			// $user->email=$email;
			// $user->mobile_phone=$mobilephone;
			// $user->password=$password;
			// $user->role_id=$roleid; // role id of the user

			// 	//$user->fill($data1);
			// 	$user->save();
				//after saving find the id of the user created and pass it to another page
				// if($user->role_id == 1)
				// {
				// 	// if the role_id is 1 then it wud know it as the reader
				// 	$use=User::select('id')->where('email','=',$email)->first();
				// 	return View::make('user.login');
				// }
				// if($user->role_id == 2)
				// {
				// 	// if the role_id is 2 then it wud know it as the author
				// 	$use=User::select('id')->where('email','=',$email)->first();
				// 	return View::make('user.login');
				// }
				// if($user->roles_id == 3)
				// {
				// 	//if role_id is 3 then it is admin
				// 	return View::make('admin.companyreg');
				// }
				
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
				$email = Input::get('email');
				$password = Input::get('password');
				 if(Auth::attempt(['email'=>$email, 'password'=>$password]))
				 {
				 	//fetch user profile details
				 	$user = Auth::user();
				 	$user->save();
				 	return Redirect::to('adminHome');
				 }
				 return View::make('users.login')->withErrors('Invalid email or password');
			}
		
	}