<?php

class BlogController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		return Redirect::to('blog');
	}

	public function getBlog()
	{
		//return "jhgjh";
	}
	public function postBlog()
	{
		$validate = Validator::make(Input::all(), array(
				'title' => 'required',	
				'url' => 'required',
				
			));
		if($validate->fails())
		{
			return Redirect::to('blog')->withErrors($validate)->withInput();
		}
		else
		{
			
			$email=Session::get('email');
			$uid= Login::where('email', '=', $email)->first();
			$blog=new Blog();
			if(!$email == null)
			{
				$blog->user_id = $uid->uid; 
				$blog->titel = Input::get('title');
				$blog->url =Input::get('url'); 
			
				if ($blog->save())
				{
					return Redirect::to('show');
				}
			}
			else
			{
				return Redirect::to('home');
			}
		}
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */

	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
