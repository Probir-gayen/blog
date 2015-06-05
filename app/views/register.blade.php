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

	<form class="" action="register/create" method="post">
		<div>
			Email-id</br><input type="email" name="email" required>
			 @if($errors->has('email'))
					{{ $errors->first('email') }}
				@endif
		</div>
		<div>
			First Name</br><input type="text" name="firstname" required>
			 @if($errors->has('firstname'))
					{{ $errors->first('firstname') }}
				@endif
		</div>
		<div>
			Last Name</br><input type="text" name="lastname" required>
			 @if($errors->has('lastname'))
					{{ $errors->first('lastname') }}
				@endif
		</div>
		<div>
			DOB</br> <input type="date" name="dob" required>
			 @if($errors->has('dob'))
					{{ $errors->first('dob') }}
				@endif
		</div>
		<div>
			Gender:<span> <input type="radio" name="gender" value="male" required>Male</span><span><input type="radio" name="gender" value="female" required>Female</span>
			 @if($errors->has('gender'))
					{{ $errors->first('gender') }}
				@endif
		</div>
		<div>
			Password</br><input type="password" name="password" required>
			@if($errors->has('password'))
					{{ $errors->first('password') }}
				@endif
		</div>
		<div>
			Re-enter Passwod</br><input type="password" name="password2" required>
			 @if($errors->has('password2'))
					{{ $errors->first('password2') }}
				@endif
		</div>
		<div>
			Address</br> <textarea name="address" required></textarea>
			 @if($errors->has('address'))
					{{ $errors->first('address') }}
				@endif
		</div>
		<div>
			Country</br><input type="text" name="country" required>
			@if($errors->has('country'))
				{{ $errors->first('country') }}
			@endif
		</div>
		<div>
			State</br><input type="text" name="state" required>
			 @if($errors->has('state'))
					{{ $errors->first('state') }}
				@endif
		</div>
		<div>
			Zip Code</br><input type="text" name="zipcode" required>
			 @if($errors->has('zipcode'))
					{{ $errors->first('zipcode') }}
				@endif
		</div>
		<div>
			Mobile No.</br><input type="text" name="mbnumber" required>
			 @if($errors->has('mbnumber'))
					{{ $errors->first('mbnumber') }}
				@endif
		</div>
		<div>
			<input type="submit" value="Submit">
		</div>
	</form>
@stop
