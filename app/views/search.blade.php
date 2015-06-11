@extends('layouts.index')


@section('head')
	@parent

	<title>Blog</title>
	{{ HTML::script('js/control.js') }}
	
@stop

@section('content')
	
	@if(Session::has('success'))
		<div class="alert alert-success">{{ Session::get('success') }}</div>
	@elseif(Session::has('fail'))
		<div class="alert alert-danger">{{ Session::get('fail') }}</div>
	@endif

	<div>
		<div class="header row" style="background-color:#006666;color:#fff">
		<div class="col-10" style="">
			 {{ Session::get('email') }}
		</div>
		<div class="col-2"style="float:right;">
			<label><a href="{{ URL::to('show',$url) }}" style="color:#fff;">Cancel</a></label>
		</div>
	</div>

	<form role="form" action="{{URL::route('search',$url)}}" method="post" style="margin-top:70px;">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="form-group col-md-4">
			<label>Search By</labe>
			<label>
				<select id="category" name="option">

					<option>Choose</option>
					<option>Tag</option>
					<option>Category</option>
				
				</select>
			</label>
			<label>
				<input type="text" name="search" id="search" placeholder="Type">
			</label>
			<div>
				<label><button class="btn-primary" type="submit">Search</button></label>
			</div>
							
		</div>
		<div class="col-md-4"></div>
	</div>		
	</form>
	<div style="margin-left:250px">
		@if(Session::has('all'))
			<?php $all=Session::pull('all'); ?>
			<div>
				@if(count($all)>0)
					@foreach($all as $allin)
						<h2>The Search result is...</h2>
						The search tag/category having Post Name is 
						<p style="color:blue;">  "{{ $allin['title'] }}" <p>of</br>
						<p style="color:blue;"> "{{ $allin['fname'] }} {{ $allin['lname'] }}"</p>" Post's</br>
						----------------------------------------------
					@endforeach
				@else
				
					Sorry No Search Results..
				
				@endif
			</div>
			
		@endif
	</div>