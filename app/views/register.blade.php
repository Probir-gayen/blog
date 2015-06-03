<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration Page</title>
</head>	
<body>
	<form action="register/create" method="post">
		<div>
			Email-id<input type="email" name="email" required>
			 @if($errors->has('email'))
					{{ $errors->first('email') }}
				@endif
		</div>
		<div>
			First Name<input type="text" name="firstname" required>
			 @if($errors->has('firstname'))
					{{ $errors->first('firstname') }}
				@endif
		</div>
		<div>
			Last Name<input type="text" name="lastname" required>
			 @if($errors->has('lastname'))
					{{ $errors->first('lastname') }}
				@endif
		</div>
		<div>
			DOB <input type="date" name="dob" required>
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
			Password<input type="password" name="password" required>
			@if($errors->has('password'))
					{{ $errors->first('password') }}
				@endif
		</div>
		<div>
			Re-enter Passwod<input type="password" name="password2" required>
			 @if($errors->has('password2'))
					{{ $errors->first('password2') }}
				@endif
		</div>
		<div>
			Adress <textarea name="address" required></textarea>
			 @if($errors->has('address'))
					{{ $errors->first('address') }}
				@endif
		</div>
		<div>
			Country<input type="text" name="country" required>
			@if($errors->has('country'))
				{{ $errors->first('country') }}
			@endif
		</div>
		<div>
			State<input type="text" name="state" required>
			 @if($errors->has('state'))
					{{ $errors->first('state') }}
				@endif
		</div>
		<div>
			Zip Code<input type="text" name="zipcode" required>
			 @if($errors->has('zipcode'))
					{{ $errors->first('zipcode') }}
				@endif
		</div>
		<div>
			Mobile No.<input type="text" name="mbnumber" required>
			 @if($errors->has('mbnumber'))
					{{ $errors->first('mbnumber') }}
				@endif
		</div>
		<div>
			<input type="submit" value="Submit">
		</div>
	</form>
</body>
</html>

