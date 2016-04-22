@extends('layouts.master')

	@section('top-script')
   	<title>My Resume</title>

   	@stop


   	@section('content')
   	<h1>This Is My resume</h1>
   	<li><a href="{{{action('HomeController@showPortfolio')}}}">Portfolio Page</a></li>
   	<li><a href="{{{action('HomeController@whackamole')}}}">Whackamole Page</a></li>
   	  
   	  	
   	@stop	

      