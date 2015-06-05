<!doctype html>
<html lang="en">
<head>
	@section('head')
	<meta charset="UTF-8">
	{{ HTML::style('css/style1.css') }}
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
	<script src="js/main.js" type="text/javascript"></script>
	<script src="js/ajax.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript"></script>

	@show
</head>
<body>
	
	@yield('content')

	
</body>
</html>
