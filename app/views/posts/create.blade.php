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
	<h1>create a Diary</h1>
	{{ Form::open(['action' => 'PostsController@store', 'files' => true, 'method'=>'POST']) }}
		{{ Form::label('title', 'Title') }}
		{{ Form::text('title', null,['class'=> 'form-control' ]) }}
		@if ($errors->has('title'))
		<p>{{$errors->first('title')}}</p>
		@endif

		{{ Form::label('body', 'Body') }}
		{{ Form::textarea('body', null,['class'=> 'form-control', 'id' => 'body']) }}
		@if ($errors->has('body'))
		<p>{{{$errors->first('body')}}}</p>
		@endif
		<div class = "form-group">
			{{ Form::label('image', 'Image') }}
			{{ Form::file('image') }}
		</div>
		@if ($errors->has('image'))
		<p>{{$errors->first('image')}}</p>
		@endif
		<button type="submit" class="btn btn-default" name="save" value="save">submit</button>
	{{ Form::close() }}
</div>
@stop
