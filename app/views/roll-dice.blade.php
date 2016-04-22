@extends('layouts.master')
   
   	@section('top-script')
   	<title>Dice Game</title>

   	@stop
	@section('content')
		<h1> Guess: {{{$guess}}}  </h1>
		<h1> randomNumber: {{{$randomNumber}}} </h1>

	    @if($randomNumber == $guess)
	    	<h3> You guessed Correctly</h3>
	    @else 
	   		<h3>You Guessed Wrong</h3>

	    @endif
	    	<li><a href="{{{ action('HomeController@rolldice',1) }}}">1</a></li>
	   	  	<li><a href="{{{ action('HomeController@rolldice',2) }}}">2</a></li>
	   	  	<li><a href="{{{ action('HomeController@rolldice',3) }}}">3</a></li>
	   	  	<li><a href="{{{ action('HomeController@rolldice',4) }}}">4</a></li>
	   	  	<li><a href="{{{ action('HomeController@rolldice',5) }}}">5</a></li>
	   	  	<li><a href="{{{ action('HomeController@rolldice',6) }}}">6</a></li>
	@stop
	
	@section('bottom-script')

	@stop