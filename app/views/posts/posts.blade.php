@extends('layouts.master')


	@section('top-script')

	@stop

	@section('content')
	<div class='container'>
		
		<h1>This is my diary page</h1>
			<form class='navbar-form' method="GET" action="{{{action('PostsController@index')}}}">
			<div class='input-group'>
				<input type='text'class='form-control search-bar' placeholder="search Blog by Keyword" name="search" value="{{Input::get('search')}}">
				<div class="input-group-btn">
					<button class="btn btn-navbar" type="submit"><i class="fa fa-search search-icon"></i></button>
				</div>
			</div>
		</form>
		@foreach($posts as $post)
			<h3><a href="{{{action('PostsController@show', $post->id)}}}">{{{$post->title}}}</a></h3><br>
			<p>Written by: {{{$post->user->first_name . ' '. $post->user->last_name}}}</p>
		@endforeach


		{{ $posts->links() }}

		
		<p>
			

			<a href="{{{action('PostsController@create')}}}">Create a new one</a>
		
		</p>
	</div>
	@stop
	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script><link>
    <script>
		

	</script>
	@stop
