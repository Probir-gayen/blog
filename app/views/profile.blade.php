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

	<div class="header row" style="background-color:#3a5795;color:#fff">
		<div class="col-10" style="">
			Welcome {{ Session::get('email') }}
		</div>
		<div class="col-2"style="float:right;">
			<label><a href="{{ URL::to('logout') }}" style="color:#fff;">Logout</a></label>
		</div>
	</div>


	<div class="all  ">
			<div class="beforeleftside"  style="float:left; height:500px; width:100px;">
				
			</div>
			
			<div class="leftside " style="float:left;height:700px; width:200px;">
				<p><a href="{{ URL::to('create') }}">Create Blog</a></p>
			</div>
			<div class="timeline" style="float:left;width:500px">
				<div class="timelineinside" style="">
					<h1>Your Blogs</h1>
				</div>
				<div class="timelineinside" style=" margin-top:10px;">
					<ul>
						@foreach($blogs as $blog)
							Title: <a href="{{ URL::to('show', $blog->url) }}"><lable>{{ $blog->titel }}</lable></a>
							having Url:<a href="{{ URL::to('show',$blog->url) }}"> <lable>{{ $blog->url }}</lable></a></br>
							With Id: <lable>{{ $blog->bid }}</lable></br>
							Created at: <lable>{{ $blog->created_at }} </lable></br>
							Updated at:<lable> {{ $blog->updated_at }} </lable>
							====================================</br></br>
						@endforeach
					</ul>
				</div>
			</div>
			<div class="add " style="float:left;height:500px;width:300px">

			</div>
			<div class="righside" style="float:right;height:500px;">

			</div>	
	</div>

@stop