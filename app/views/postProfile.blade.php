@extends('layouts.index')


@section('head')
	@parent

	<title>Blog</title><script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($){
			$(".com").click(function(){
			$(".comment").slideToggle();
			// alert("gklg");
			});
		});
	</script>
	
@stop

@section('content')

	<div class="header row" style="background-color:#006666;color:#fff;">
		<div class="col-10" style="">
			@if(Session::get('email') == $al['email'])
				Welcome {{ Session::get('email') }}
			@else
				Welcome To {{ $al['fname'] }} {{ $al['lname'] }}'s Post
			@endif
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
					@if(Session::get('email') == $al['email'])
						
						<p><a href="{{ URL::route('posts',array($al['url'], $al['bid'])) }}" style="color:#333;">New Post</a></p>
						
					@endif
					<div>
						<p><a href="{{ URL::to('posts/search',$al['url'])}}" style="color:#333;">Search</a></p>
					</div> 
				</div>
			<div class="timeline" style="float:left;width:500px">
				<div class="timelineinside" style="">
					<h1>Your Post</h1>
				</div>
				<div class="timelineinside" style=" margin-top:10px;">
					<ul>
						@foreach($pos as $poss)
							<li>
								Title: <a href=""><lable>{{ $poss->titel }}</lable></a>
								Description: <lable>{{ $poss->description }}</lable></br>
								The Category is: <lable>{{ $poss->category }}</lable></br>
								The Tage : <lable>{{ $poss->tag }}</lable>
								@foreach($tag as $tags)
									@if($tags['post_id']==$poss['pid'])
										,{{ $tags['subtag'] }}
									@endif
								@endforeach
								</br>Created at: <lable>{{ $poss->created_at }} </lable></br>
								Updated at:<lable> {{ $poss->updated_at }} </lable>
								
								<div>
									@if(Session::has('email'))
										<span  style="float:left;"><a href="#" class="com" >Comment</a></span>
									@else
										<span style="float:left;">Join Me</span>
									@endif
									<span style="float:right;">
										
										@if(count($like) > 0)<?php $i=0; ?>
												@foreach($like as $likes)
													@if( $likes['post_id'] == $poss['pid'])
														
														<?php $i++; ?>
														
													@endif 
												@endforeach <a href=""> {{ $i }}Likes </a><?php $i=0; ?>
											@if(Session::has('email'))	<?php $j=0; ?>
												@foreach($like as $likes)
													 	
													 	@if($j==2)
															<?php break; ?>
														
														@elseif($al['uid'] == $likes['user_id'] ) 
														
															@if( $likes['post_id'] == $poss['pid'])
																<?php $j=2; ?>
																<?php break; ?>
															@else
																<?php $j=1; ?>
															@endif
															
														
														@else
															<?php $j=1; ?>
														@endif
														
												@endforeach
												@if($j == 1)
														<div><form action="{{ URL::route('like',array($al['url'], $poss['pid'])) }}" method="post">
														<button type="submit">LIKE</button>
														</form> </div>
												@endif
											@endif	
										@elseif(count($like)==0)
											@if(Session::has('email'))
												<div><form action="{{ URL::route('like',array($al['url'], $poss['pid'])) }}" method="post">
														<button type="submit">LIKES</button>
													</form> </div>
											@endif
										@endif
										<form class="form-control" action="{{ URL::route('delete',array($al['url'],$poss['pid'])) }}" method="post">
											@if(Session::get('email') == $al['email'])
												<button class="btn-primary">Delete Post</button>
											@endif
										</form>
									</span>
									<div style="clear:both;"></div>
									<div>
										<ul> 
											@foreach($com as $coms)
											
												@if($coms['post_id'] == $poss->pid)
													<li>
														<div>
															{{ $coms['commenter'] }} having email-id {{ $coms['email'] }} has commented
															<div style="border:1px solid #fff;display:inline-block;background-color:#fff;">
																{{ $coms['comment'] }}
															</div></br>
															AT:{{ $coms['created_at']}} 
															@if(Session::get('email') == $al['email'])
																<div style="float:right;">
																	<form action="{{ URL::route('deleteCom',array($al['url'], $coms['cid'])) }}" method="post">
																		<button class="btn ">Delete Comment</button>
																	</form>
																</div>
															@endif
														</div>
													</li>
												@endif
											@endforeach
										</ul>
									</div></br> </br>
									<div class="comment " style="display:none;">
									<form class="" action="{{URL::route('comment',array($al['url'],$poss['pid']))}}" method="post">
										commenter:<input type="text" name="commenter" required placeholder="Enter your name"></br>
										Email-Id:<input type="email" name="email" required placeholder="Enter your email"></br>
										Comment:<textarea name="comment" required placeholder="Comment..."></textarea>
										<button class="btn-primary">comment</button>
									</form>
									</div>
								</div>
								<div style="clear:both;"></div>
								
							==================================================</br></br>
						</li>
						@endforeach
					</ul>
					
				</div>
			</div>
			<div class="add " style="float:left;height:500px;width:300px">

			</div>
			<div class="righside" style="float:right;height:500px;">

			</div>