@extends('layouts.master')

@section('top-script')
		<style>
			.post-image {
			position:relative;
			left:25%;
			border:4px solid grey;
			border-radius:50%;
			box-shadow: 3px 3px 1px #3a3a3a;
			margin-top: 1.5em;
			margin-bottom: 1.5em;

		}

		.post-wrap {
			border: 1px solid #DDDDDD;
			padding: 10px;
			border-radius:10px;
		}

		@media (max-width: 400px) {
    		.post-image {
        		left: 22%;
        		margin-bottom: 1.5em;
    		}
		}

			.post-wrap {

				margin-right: 1.5em;

			}

		</style>
	
@stop

@section('content')
<div class='row'>
<div class="col-md-1"></div>
 <div class='container col-md-4 post-wrap'>
 	@if ($post->user->image)
			<img class='post-image' src="{{{ $post->user->image}}}" heigth='200' width='200'>

		@endif
	

		<p>Written by: {{{$post->user->first_name . ' '. $post->user->last_name}}}</p>
		<p> Created at: {{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A')}}} </p>
		<p> {{{ $post->created_at->diffForHumans() }}}</P>
	
		
 </div>
 <div class='container col-md-6 post-wrap'>

 	<h1>This is my highschool diary</h1>
		<h2>{{{$post->title}}}</h2>
		@if ($post->image)
			<img src="{{{ $post->image}}}">
		@endif
	<div class="post-wrap">
 		<p>{{$post->body}}</p>
 	</div>
@if(Auth::check() && Auth::user()->id == $post->user_id)
	<div class='deletebtn'>
		{{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'DELETE')) }}
	    {{ Form::submit('Delete', ['class' => 'btn btn-default']) }}
		{{ Form::close() }}
	</div>

	<div class='editbtn'>
		{{ Form::open(array('action' => array('PostsController@edit', $post->id), 'method' => 'GET')) }}
	    {{ Form::submit('Edit', ['class' => 'btn btn-default']) }}
		{{ Form::close() }}
	</div>
@endif	
	<a href="{{{action('PostsController@index')}}}">Return to Home</a>
 </div>
</div>
@stop

@section('top-script')

@stop	


	


	
