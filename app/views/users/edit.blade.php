@extends('layouts.master')

@section('top-script')
	<style>

		.image {
			position:relative;
			left:40%;
			border:4px solid grey;
			border-radius:50%;
			box-shadow: 3px 3px 1px #3a3a3a;
			margin-top: 1.5em;

		}

		@media (max-width: 400px) {
    		.image {
        		left: 22%;
    		}
		}

	</style>

@stop

@section('content')
	  <div class="container">

{{ Form::model(Auth::user(), array('action' => array('UserController@update', Auth::id()),'files' =>true, 'method' => 'PUT')) }}
		@if (Auth::user()->image)
			<img class='image' src="{{{ Auth::user()->image}}}" heigth='200' width='200'>

		@endif
		<br>
		<br>
		
		{{ Form::label('first name', 'First name') }}
		{{ Form::text('first_name', null,['class'=> 'form-control']) }}
		@if ($errors->has('first_name'))
		<p>{{$errors->first('first_name')}}</p>
		@endif

		{{ Form::label('last_name', 'Last Name') }}
		{{ Form::text('last_name', null,['class'=> 'form-control', 'placeholder'=>"put what you like"]) }}
		@if ($errors->has('last_name'))
		<p>{{{$errors->first('last_name')}}}</p>
		@endif

		{{ Form::label('email', 'Email') }}
		{{ Form::text('email', null,['class'=> 'form-control', 'placeholder'=>"put what you like"]) }}
		@if ($errors->has('email'))
		<p>{{{$errors->first('email')}}}</p>
		@endif
		<br>
		<a href="{{{action('UserController@editPassword')}}}">Change Password</a>
		<br>
		<br>
		<div class = "form-group">
			{{ Form::label('image', 'Image') }}
			{{ Form::file('image') }}
		</div>
		@if ($errors->has('image'))
		<p>{{$errors->first('image')}}</p>
		@endif
		<button type="submit" class="btn btn-default" name="save" value="save">update</button>

		
	{{ Form::close()}}


		{{ Form::open(array('action' => array('UserController@destroy', Auth::user()->id), 'method' => 'DELETE')) }}
	    {{ Form::submit('Delete Account', ['class' => 'btn btn-default delete']) }}
		{{ Form::close() }}

 </div>

@stop

@section('bottom-script')
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script>
"use strict";

$('.delete').click(function(){
var checkstr =  confirm('are you sure you want to delete this?');
if(checkstr == true){
  
}else{
return false;
}
});
</script>

@stop