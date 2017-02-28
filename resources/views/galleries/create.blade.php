@extends('layouts.backend')

@section('content')

	<h1>Create Gallery</h1>
	
	<hr />
	
	{!! Form::model($gallery = new \App\Gallery, ['url' => 'admin/galleries']) !!}
	
		@include('galleries.form', ['submitButtonText' =>  'Add Gallery'])
	
	{!! Form::close() !!}
	
	@include('errors.formerror')
	

@stop