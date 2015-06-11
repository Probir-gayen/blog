
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

	<p style="background-color:#006666; font-size:24px; text-align:center; padding:5px; color:#fff;">Member Login</p>
	<div id="form" style="padding:0px 10px 10px 10px;">
	    <form role="form" class="form_box" id="loginform" action="login" method="post">
	        <div class="form-group">
		        <label id="label1">Email</label>
		        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="required">
		        <div id="semail"></div>
				
		        <label id="label2">Password</label>
		        <input type="password" class="form-control" id="password" name="password" placeholder="Password"  required="required">
		       
	        </div>
	        <div class="btn btn primary">
	        	<button type="submit" value="Login">Login</button>
	   		</div>
	        <p id="loginstatus"></p>
	        <a class="forgot" href="#">Forgot Password</a>
	    </form>    
	</div>
@stop
