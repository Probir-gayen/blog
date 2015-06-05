<?php

class commentController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	public function postComment($url , $pid)
	{
		$validate = Validator::make(Input::all(), array(
				'commenter' => 'required',	
				'email' => 'required',
				'comment' => 'required',
				
			));

		if($validate->fails())
		{
			return Redirect::to('post/')->withErrors($validate)->withInput();
		}
		else
		{
			$com = new Comment();
			$com->post_id = $pid; 
			$com->commenter = Input::get('commenter');
			$com->email =Input::get('email'); 
			$com->comment =Input::get('comment');

			if($com->save())
			{
				return Redirect::to('show/'.$url);
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
