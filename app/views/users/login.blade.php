@extends('layouts.master')

@section('top-script')
	<style>
		.col-md-4 {

		    background-color: #115fa1;
			color: white;
			position: relative;
			height:  23em;
			text-align: center;
			border-radius: 8px 0px 0px 8px;
		}

		.line {
			background-color: white;
		    width: 150px;
		    height: 2px;
		    margin-left: 7.5em;
		}

		.fa-pencil-square-o:hover{
			color:#23475F;
			-webkit-transition: all 500ms ease;
			-moz-transition: all 500ms ease;
			-ms-transition: all 500ms ease;
			-o-transition: all 500ms ease;
			transition: all 500ms ease;
			  transform: rotate(360deg);
    			transform-origin: 50% 50%
		}
		

	</style>

@stop

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<br>
			<br>
			<h1 class='login'>Log In</h1>
			<div class='line'></div>
			<h4 class="log-info">Hey there! Wanna blog?</h4>
			<br>
			<i class="fa fa-pencil-square-o fa-4x" aria-hidden="true"></i>
		</div>

		<div class="col-md-8">
			{{ Form::model(['action' => 'UserController@doLogin', 'method'=>'GET'])}}
				{{ Form::label('email', 'Email', ['class'=>'labels']) }}
				{{ Form::email('email',null,['class'=> 'form-control',]) }}
				@if ($errors->has('email'))
				<p>{{$errors->first('email')}}</p>
					<span style="color:red">Text field cannot be empty</span>
				@endif

				{{ Form::label('password', 'Password', ['class'=>'labels']) }}
				{{ Form::password('password',['class'=> 'form-control',])}}
				<button type="submit" class="btn btn-default" name="save" value="save">Log In</button>
				@if ($errors->has('password'))
				<p>{{{$errors->first('password')}}}</p>
				@endif
			{{Form::close()}}
		</div>
	</div>
</div>
@stop



</div>