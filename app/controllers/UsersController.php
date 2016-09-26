<?php
class UsersController extends BaseController
	{
		public function Login()
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
	}