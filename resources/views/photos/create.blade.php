@extends('layouts.backend')

@section('content')

	<h1>Create Photo</h1>
	
	<hr />
	
	{!! Form::model($photo = new \App\Photo, ['url' => 'admin/photos', 'files' => 'true']) !!}
	
		@include('photos.form', ['submitButtonText' =>  'Add Photo'])
	
	{!! Form::close() !!}
	
	@include('errors.formerror')
	

@stop