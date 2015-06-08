<?php

	class RegisterController extends BaseController
	{
		
		public function getIndex() 
		{

			return View::make('register');
		}

		public function getCreate() 
		{

			
		}

		public function postCreate() 
		{
			$validate = Validator::make(Input::all(), array(
				'email' => 'required',	
				'firstname' => 'required|min:4',
				'lastname' => 'required|min:3',
				'dob' => 'required',
				'gender' => 'required',
				'password' => 'required|min:6',
				'password2' => 'required|same:password',
				'address' => 'required',
				'country' => 'required',
				'state' => 'required',
				'zipcode' => 'required',
				'mbnumber' => 'required'
			));

			if($validate->fails())
			{
				return Redirect::to('register')->withErrors($validate)->withInput();
			}
			else
			{
				$user=new Login();
				$user->email = Input::get('email');
				$user->password = Hash::make(Input::get('password')); 

				if ($user->save())
				{
					$details = new UserDetails();

					$details->user_id = DB::table('login')->where('email', Input::get('email'))->pluck('uid');
					$details->first_name = Input::get('firstname');
					$details->last_name = Input::get('lastname');
					$details->dob = Input::get('dob');
					$details->gender = Input::get('gender');
					$details->address = Input::get('address');
					$details->country = Input::get('country');
					$details->state = Input::get('state');
					$details->zip_code = Input::get('zipcode');
					$details->mobile_number = Input::get('mbnumber');
					if($details->save())
					{
					return Redirect::to('login');
					}
					else
					{
						return 'not inserted';
					}
				}
				else
				{
					return 'not inserted';
				}
			}


			// die(var_dump($email));

		}

		public function postAjaxRegister()
		{
			
			$email = Input::get('val');
			$name = Input::get('val');
			$opt = Input::get('opt');
			if($opt == "email")
			{
				$log= Login::all();
				foreach ($log as $key => $value)
				 {
					if($email == $value->email)
					{
						return 'Email Already Exist';
					}
					else
					{
						return 'Accepted Email';
					}
				}
			}
			else if($opt=="fname")
			{
				$det= UserDetails::all();
				foreach ($det as $key => $value)
				 {
					if($name == $value->first_name)
					{
						return 'Name Already Exist';
					}
					else
					{
						return 'Accepted Name';
					}
				}
			}	
		}
	}
?>