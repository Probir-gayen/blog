<?php

class postsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex($url)
	{
		
		$bid= Blog::where('url', '=', $url)->first();
		$pos=Post::where('blog_id',"=", $bid['bid'])->get();
		$det= UserDetails::where('user_id',"=", $bid['user_id'])->first();
		$pos1=Post::where('blog_id','=',$bid['bid'])->first();
		$al = array('url' => $url ,
					'bid' => $bid['bid'] , 'fname' => $det['first_name'] ,'lname' => $det['last_name'] );
		// $com = Comment::where('post_id','=', $pos1['pid'])->get();
		// return $com;

		$com = Comment::all();
		return View::make('postProfile')->with('pos',$pos)->with('al',$al)->with('com',$com);
	}

	public function getPosts($url , $bid)
	{
		
		// return "kgkg";
		$bid= Blog::where('url', '=', $url)->first();
		// $al = array('url' => $url ,
		// 			'bid' => $bid->bid );	
		return View::make('posts')->with('url',$url);
	}
	public function postPosts($url )
	{
		// return "sdsdsds";
		$validate = Validator::make(Input::all(), array(
				'title' => 'required',	
				'desc' => 'required',
				'category' => 'required',
				'tag' => 'required',
			));

		if($validate->fails())
		{
			return Redirect::to('post/')->withErrors($validate)->withInput();
		}
		else
		{
			$pos = new Post();
			$bid = Blog::where('url', '=', $url)->first();

			$pos->blog_id = $bid['bid']; 
			$pos->titel = Input::get('title');
			$pos->description =Input::get('desc');
			//dd(Input::get('tag'));
			// dd(Input::get('categoryop'));
			// dd(Input::get('tagop'));
			if(Input::get('category') != "Others" && Input::get('tag') != "Others") 
			{
				$pos->category =Input::get('category'); 
				$pos->tag =Input::get('tag'); 
			}
			else if(Input::get('category') != "Others" && Input::get('tag') == "Others") 
			{
				$pos->category =Input::get('category'); 
				$pos->tag =Input::get('tagop'); 
			}
			else if(Input::get('category') == "Others" && Input::get('tag') == "Others")
			{
				$pos->category =Input::get('categoryop'); 
				$pos->tag =Input::get('tagop'); 
			}
			if($pos->save())
			{
				return Redirect::to('show/'.$url);
			}
			else
			{
				return "error";
			}
		}
	}

	public function postDelete($url , $pid)
	{
		// return "gjhgkjj";
		$pos= Post::where('pid','=',$pid)->delete();
		
		$com=Comment::where('post_id','=',$pid)->delete();
		//$com->delete();

		return Redirect::to('show/'.$url);

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
