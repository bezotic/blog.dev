@extends('layouts.master')

@section('top-script')
	<style>
		body {
			background-color: #23475F;
			font-family: 'Ubuntu', sans-serif;
			font-weight: 700;
			font-style: bold;
		}

		.container {
			background-color: white;
			border-radius: 10px;
			box-shadow: 10px 10px 5px #11222E;
			padding-bottom:20px;
			
		}

		.btn:hover {
			background-color: #23475F;
			color:white;
			box-shadow:5px 5px 2px #11222E; 
		}

		.btn {
			margin-top:10px;
		}

	</style>

@stop

@section('content')
  <div class="container">
	{{ Form::open(['action' => 'UserController@store', 'files' =>true, 'method'=>'POST']) }}
	@if (Auth::check())
			<img class='image' src="{{{ Auth::user()->image}}}" heigth='200' width='200'>

		@endif
		{{ Form::label('first name', 'First name') }}
		{{ Form::text('first name', null,['class'=> 'form-control']) }}
		@if ($errors->has('first name'))
		<p>{{$errors->first('first name')}}</p>
		@endif

		{{ Form::label('last name', 'Last Name') }}
		{{ Form::text('last name', null,['class'=> 'form-control', 'placeholder'=>"put what you like"]) }}
		@if ($errors->has('last name'))
		<p>{{{$errors->first('last name')}}}</p>
		@endif

		{{ Form::label('email', 'Email') }}
		{{ Form::text('email', null,['class'=> 'form-control', 'placeholder'=>"put what you like"]) }}
		@if ($errors->has('email'))
		<p>{{{$errors->first('email')}}}</p>
		@endif

		{{ Form::label('password', 'Password') }}
		{{ Form::password('password',['class'=> 'form-control', 'placeholder'=>"put what you like"]) }}
		@if ($errors->has('password'))
		<p>{{{$errors->first('password')}}}</p>
		@endif

		<div class = "form-group">
			{{ Form::label('image', 'Image') }}
			{{ Form::file('image') }}
		</div>
		@if ($errors->has('image'))
		<p>{{$errors->first('image')}}</p>
		@endif
		<button type="submit" class="btn btn-default" name="save" value="save">submit</button>
	{{ Form::close()}}
 </div>
@stop

@section('bottom-script')

@stop








