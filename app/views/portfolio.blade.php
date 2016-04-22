@extends('layouts.master')

	

	@section('top-script')
   	<title>My Portfolio</title>

   	@stop

   	@section('content')
   	<h1>This Is My portfolio</h1>
   		<a href="{{{action('HomeController@showResume')}}}">
   		Resume Page</a>
   	@stop