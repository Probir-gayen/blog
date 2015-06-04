@extends('layouts.index')


@section('head')
	@parent

	<title>Blog</title>
	
@stop

@section('content')

	<div class="header row" style="background-color:#3a5795;color:#fff">
		<div class="col-10" style="">
			Welcome {{ Session::get('email') }}
		</div>
		<div class="col-2"style="float:right;">
			<label><a href="{{ URL::to('show') }}" style="color:#fff;">Cancel</a></label>
		</div>
	</div>
	<form action="blog" method="post" style="margin-top:70px;">
		<div style="color:#3a5795;">
			<h1>Create Your New Blog</h1>
			<div>
				<label>Titel</label>
				<label><input type="text" name="title" placeholder="Enter Title"></label>
			
				<label>Url</label>
				<label><input type="text" name="url" placeholder="Eg: /myblog.com"></label>
			</div>
		</div>
		</br>
		<button type="submit">Create</button>
	</form>


@stop