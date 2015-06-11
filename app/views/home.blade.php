@extends('layouts.index')


@section('head')
	@parent

	<title>Blog</title>

@stop

@section('content')
	
	<div class="header row" style="background-color:#006666;color:#fff">
		<div class="col-5"></div>
		<div class="col-2" style="margin-bottom:2px;">
			
				BLOG
		</div>
		<div class="col-5"></div>		
	</div>

	<div  style="margin-top:100px;">
		<ul >
			<li><a href="{{ URL::to('login') }}">Login</a></li>
		</ul>
		<ul >
			
			<li><a href="{{ URL::to('register') }}">Register</a></li>
			
		</ul>
	</div>

@stop