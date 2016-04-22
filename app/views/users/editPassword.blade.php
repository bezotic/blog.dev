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

		.fa-lock:hover {
			color: white;
		}

		.line {
			background-color: white;
		    width: 150px;
		    height: 2px;
		    margin-left: 7.5em;
		}

		form {
			margin-top: 4em;
		}

		#cf {
		  position:relative;
		  height:281px;
		  width:450px;
		  margin:0 auto;
		}

		#cf i {
		  position:absolute;
		  left:0;
		  -webkit-transition: opacity 1s ease-in-out;
		  -moz-transition: opacity 1s ease-in-out;
		  -o-transition: opacity 1s ease-in-out;
		  transition: opacity 1s ease-in-out;
		}

		#cf i.top:hover {
		  		opacity:0;
		}

		#cf2 i.transparent {
				opacity:0;
		}
		
		#cf_onclick {
			cursor:pointer;
		}

	</style>	

@stop

@section('content')
	 <div class="container">
	 	<div class='row'>
	 	<div class="col-md-4">
			<br>
			<br>
			<h1 class='password'>Password</h1>
			<div class='line'></div>
			<h4 class="pass-ino">Update your password</h4>
			<br>
			<div id="cf">
 				<i class="fa fa-lock fa-4x"></i>
 				<i class="fa fa-unlock-alt fa-4x"></i>
			</div>
		
			
</header>
		</div>
	<div class="col-md-8">
	 {{ Form::model(Auth::user(), array('action' => array('UserController@updatePassword', Auth::user()->id),'files' =>true, 'method' => 'PUT')) }}

	 {{ Form::label('password', 'Password') }}
		{{ Form::password('password', ['class'=> 'form-control', 'placeholder'=>"Enter your new password"]) }}
		@if ($errors->has('password'))
		<p>{{{$errors->first('password')}}}</p>
		@endif
		<button type="submit" class="btn btn-default" name="save" value="save">update</button>
	{{Form::close()}}
	</div>
	</div>
	</div>
	

@stop

@section('bottom-script')
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script>
$(document).ready(function() {
  $(".btn-default").click(function() {
  $("#cf2 i.top").toggleClass("transparent");
});
});
</script>
@stop

