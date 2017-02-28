@extends('layouts.backend')

@section('content')

	<h1>Edit: {!! $gallery->title !!}</h1>
	
	<hr />
	
	{!! Form::model($gallery, ['method' => 'PATCH', 'url' => 'admin/galleries/' . $gallery->id]) !!}
		
		@include('galleries.form', ['submitButtonText' =>  'Update Gallery'])
		
	{!! Form::close() !!}
	
	@include('errors.formerror')
	

@stop