@extends('layouts.master')

@section('top-script')

@stop

@section('content')
<div class='container'>
	<h1>edit info/Update</h1>

	{{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'files' =>true, 'method' => 'PUT')) }}
	{{ Form::label('title', 'Title') }}
		{{ Form::text('title', null,['class'=> 'form-control']) }}
		@if ($errors->has('title'))
		<p>{{$errors->first('title')}}</p>
		@endif

		{{ Form::label('body', 'Body') }}
		{{ Form::textarea('body', null,['class'=> 'form-control', 'placeholder'=>"put what you like"]) }}
		@if ($errors->has('body'))
		<p>{{{$errors->first('body')}}}</p>
		@endif
		<div class = "form-group">
			{{ Form::label('image', 'Image',) }}
			{{ Form::file('image' 'height'=>'120', 'width' =>'120') }}
		</div>
		@if ($errors->has('image'))
		<p>{{$errors->first('image')}}</p>
		@endif
		<button type="submit" class="btn btn-default" name="save" value="save">Update</button>
	{{Form::close()}}
	</form>
</div>

@stop

@section('bottom-script')