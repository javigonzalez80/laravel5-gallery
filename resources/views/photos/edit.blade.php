@extends('layouts.backend')

@section('content')

	<h1>Edit: {!! $photo->title !!}</h1>
	
	<hr />
	
	{!! Form::model($photo, ['method' => 'PATCH', 'url' => 'admin/photos/' . $photo->id, 'files' => 'true']) !!}
		
		@include('photos.form', ['submitButtonText' =>  'Update Photo'])
		
	{!! Form::close() !!}
	
	@include('errors.formerror')
	

@stop