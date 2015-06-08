@extends('layouts.index')


@section('head')
	@parent

	<title>Blog</title>
	{{ HTML::script('js/register.js') }}
	
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
					<label>Title</label>
					<label><input type="text" name="title" placeholder="Enter Title" required></label></br>
					
					<label>Description</label></br>
					<label><textarea name="desc" rows="20" cols="100" required></textarea></label> </br>

					<label>Category</label>
					{{-- <label><input type="text" name="category" placeholder="Eg: Technical" required></label> --}}
					<label>
						<select name="category" id="category">

							<option>Select Category</option>
							<option>Technical</option>
							<option>Communication</option>
							<option>Food</opttion>
							<option>Entertainment</option>
							<option>Ethical</option>
							<option>Social Message</option>
							<option>News</option>
							<option>Awareness</option>
							<option>Others</option>
						</select>
					<label id="catop"></label>
					</label>
					<label>tag</label>
					<label><div ></div>
						<select id="tag" name="tag"></select>
						
					</label><label id="tagop"></label>
				</div>
			</div>
			</br>
			<button type="submit">Post</button>
		</form>
	</div>


@stop