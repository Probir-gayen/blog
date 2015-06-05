@extends('layouts.index')


@section('head')
	@parent

	<title>Blog</title>
	
@stop

@section('content')
	
	@if(Session::has('success'))
		<div class="alert alert-success">{{ Session::get('success') }}</div>
	@elseif(Session::has('fail'))
		<div class="alert alert-danger">{{ Session::get('fail') }}</div>
	@endif

	<div>
		<div class="header row" style="background-color:#3a5795;color:#fff">
		<div class="col-10" style="">
			 {{ Session::get('email') }}
		</div>
		<div class="col-2"style="float:right;">
			<label><a href="{{ URL::to('show',$url) }}" style="color:#fff;">Cancel</a></label>
		</div>
	</div>
		<form action="{{URL::route('posts1',$url)}}" method="post" style="margin-top:70px;">
			<div style="color:#3a5795;">
				<h1>Post Here</h1>
				<div>
					<label>Titel</label>
					<label><input type="text" name="title" placeholder="Enter Title" required></label></br>
					
					<label>Description</label></br>
					<label><textarea name="desc" rows="20" cols="100" required></textarea></label> </br>

					<label>Category</label>
					<label><input type="text" name="category" placeholder="Eg: Technical" required></label>

					<label>tag</label>
					<label><input type="text" name="tag" placeholder="Eg: php" required></label>
				</div>
			</div>
			</br>
			<button type="submit">Post</button>
		</form>
	</div>


@stop