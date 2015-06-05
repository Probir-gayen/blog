@extends('layouts.index')


@section('head')
	@parent

	<title>Blog</title><script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($){
			$("#com").click(function(){
			$("#comment").toggle();
			// alert("gklg");
			});
		});
	</script>
	
@stop

@section('content')

	<div class="header row" style="background-color:#3a5795;color:#fff">
		<div class="col-10" style="">
			Welcome {{ Session::get('email') }}
		</div>
		<div class="col-2"style="float:right; ">
			
			@if(Session::has('email'))
				<label><a href="{{ URL::to('logout') }}" style="color:#fff;">Logout</a></label>
			
			@endif
		</div>
	</div>

	<div class="all  ">
			<div class="beforeleftside"  style="float:left; height:500px; width:100px;">
				
			</div>
				<div class="leftside " style="float:left;height:700px; width:200px; ">
					@if(Session::has('email'))
						
						<p><a href="{{ URL::route('posts',array($al['url'], $al['bid'])) }}" style="color:#333;">New Post</a></p>
						
					@endif

				</div>
			<div class="timeline" style="float:left;width:500px">
				<div class="timelineinside" style="">
					<h1>Your Post</h1>
				</div>
				<div class="timelineinside" style=" margin-top:10px;">
					<ul>
						@foreach($pos as $pos)
							<li>
								Title: <a href="{{ URL::to('posts', $pos->pid) }}"><lable>{{ $pos->titel }}</lable></a>
								Description: <lable>{{ $pos->description }}</lable></br>
								The Category is: <lable>{{ $pos->category }}</lable></br>
								The Tage is: <lable>{{ $pos->category }}</lable></br>
								Created at: <lable>{{ $pos->created_at }} </lable></br>
								Updated at:<lable> {{ $pos->updated_at }} </lable>
								
								<div>
									<span style="float:left;"><a href="#" id="com">Comment</a></span>
									<span style="float:right;">
										<form action="{{ URL::route('delete',array($al['url'], $pos['pid'])) }}" method="post">
											<input type="submit" value="Delete Post">
										</form>
									</span>
									<div style="clear:both;"></div>
									<div>
										<ul>
											@foreach($com as $com)
												@if($com['post_id'] == $pos->pid)
													<li>
														<div>
															{{ $com['commenter'] }} having email-id {{ $com['email'] }} has commented
															<div style="display: inline-block;background-color:#fff;">
																{{ $com['comment'] }}
															</div></br>
															AT:{{ $com['created_at']}} 
														</div>
													</li>
												@endif
											@endforeach
										</ul>
									</div></br> </br>
									<div id="comment" style="">
									<form action="{{URL::route('comment',array($al['url'],$pos['pid']))}}" method="post">
										commenter:<input type="text" name="commenter" required placeholder="Enter your name"></br>
										Email-Id:<input type="email" name="email" required placeholder="Enter your email"></br>
										Comment:<textarea name="comment" required placeholder="Comment..."></textarea>
										<input type="submit" value="Comment">
									</form>
									</div>
								</div>
								<div style="clear:both;"></div>
								
								=========================================================</br></br>
						</li>
						@endforeach
					</ul>
					
				</div>
			</div>
			<div class="add " style="float:left;height:500px;width:300px">

			</div>
			<div class="righside" style="float:right;height:500px;">

			</div>