@extends('layouts.index')


@section('head')
	@parent

	<title>Blog</title>
	{{ HTML::script('js/control.js') }}

@stop
@section('content')
	
	

	<div class="header row" style="background-color:#3a5795;color:#fff;">
		<div class="col-5"></div>
		<div class="col-2" style="margin-bottom:2px;">
			
				<h4>BLOG</h4>
		</div>
		<div class="col-5"></div>		
	</div>

	<div class="row all">
		<form role="form" action="register/create" method="post">
			<div class="col-md-4"></div>
			<div class="form-group col-md-4"> 
				<div>
					Email-id</br><input type="email" id="email" class="form-control" name="email" required>
					 @if($errors->has('email'))
							{{ $errors->first('email') }}
					@endif
					<div id="semail"></div>
				</div>
				<div>
					First Name</br><input type="text" id="fname" class="form-control" name="firstname" required>
					 @if($errors->has('firstname'))
							{{ $errors->first('firstname') }}
					@endif
					<div id="sname"></div>
				</div>
				<div>
					Last Name</br><input type="text" id="lname" class="form-control" name="lastname" required>
					 @if($errors->has('lastname'))
							{{ $errors->first('lastname') }}
						@endif
				</div>
				<div>
					DOB</br> <input type="date"  class="form-control" name="dob" required>
					 @if($errors->has('dob'))
							{{ $errors->first('dob') }}
						@endif
				</div>
				<div>
					Gender:<span> <input type="radio"  name="gender" value="male" required>Male</span><span><input type="radio" name="gender" value="female" required>Female</span>
					 @if($errors->has('gender'))
							{{ $errors->first('gender') }}
						@endif
				</div>
				<div>
					Password</br><input type="password" class="form-control" name="password" required>
					@if($errors->has('password'))
							{{ $errors->first('password') }}
						@endif
				</div>
				<div>
					Re-enter Passwod</br><input type="password" class="form-control" name="password2" required>
					 @if($errors->has('password2'))
							{{ $errors->first('password2') }}
						@endif
				</div>
				<div>
					Address</br> <textarea name="address" class="form-control" required></textarea>
					 @if($errors->has('address'))
							{{ $errors->first('address') }}
						@endif
				</div>
				<div>
					Country</br><input type="text" class="form-control" name="country" required>
					@if($errors->has('country'))
						{{ $errors->first('country') }}
					@endif
				</div>
				<div>
					State</br><input type="text" class="form-control" name="state" required>
					 @if($errors->has('state'))
							{{ $errors->first('state') }}
						@endif
				</div>
				<div>
					Zip Code</br><input type="text" class="form-control" name="zipcode" required>
					 @if($errors->has('zipcode'))
							{{ $errors->first('zipcode') }}
						@endif
				</div>
				<div>
					Mobile No.</br><input type="text" class="form-control" name="mbnumber" required>
					 @if($errors->has('mbnumber'))
							{{ $errors->first('mbnumber') }}
						@endif
				</div>
				<div>
					</br><button class="btn-primary form-control">Submit</button>
				</div>
			</div>
		</form>
		<div class="col-md-4"></div>
	</div>

@stop
