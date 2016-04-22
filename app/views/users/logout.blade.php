@extends('layouts.master')

@extends('top-script')

@stop

@extends('content')
		{{ Form::model(['action' => 'UserController@logout', 'method'=>'GET'])}}

@stop

@extends('bottom-script')

@stop