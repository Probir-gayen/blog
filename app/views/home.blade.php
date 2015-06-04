@extends('layouts.index')


@section('head')
	@parent

	<title>Blog</title>

@stop

@section('content')

	<div class="navbar-collapse collapse navbar-responsive-collapse">
		<ul class="nav navbar-nav">
			<li><a href="{{ URL::to('login') }}">Login</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			
				<li><a href="{{ URL::to('register') }}">Register</a></li>
			
		</ul>
	</div>

@stop