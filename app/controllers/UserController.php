<?php

class UserController extends BaseController
{

	public function postLogin()
	{
		$validate = Validator::make(Input::all(), array(
				'email' => 'required',	
				'password' => 'required',
				
			));

		if($validate->fails())
		{
			return Redirect::to('register')->withErrors($validate)->withInput();
		}
		else
		{
			$email = Input::get('email');
			$password = Input::get('password');

			if (Auth::attempt(['email' => $email, 'password' => $password]))
			{

				Session::put('email',$email);
				
				return Redirect::to('show');
				
			}	
			else
			{
				return Redirect::to('login')->with('fail', 'Failed');
			}
		}
	}

	 public function getLogin()
	{

		$email=Session::get('email');
		$uid= Login::where('email', '=', $email)->first();
		$blogs=Blog::where('user_id',"=", $uid->uid)->get();
		//return $blogs;
		return View::make('profile',array('blogs'=>$blogs));
	}

	public function getLogout()
	{
		Session::flush();
		Auth::logout();
		return Redirect::to('home');
		
	}

	public function postDeleteBlog($bid)
	{
		

		$pos= Post::where('blog_id','=',$bid)->first();
		if($pos != null)
		{
			$com=Comment::where('post_id','=',$pos->pid)->delete();
			$pos= Post::where('pid','=',$pos->pid)->delete();
		}
		$blog=Blog::where('bid','=',$bid)->delete();
		

		return Redirect::to('show');

	}


	public function postAjaxLogin()
	{
		
		$cc = Input::get('val');
		$log= Login::all();
		foreach ($log as $key => $value)
		 {
			if($cc != $value->email)
			{
				return 'invalid email';
			}
			else
			{
				return 'correct';
			}
		}
		
	}
}

