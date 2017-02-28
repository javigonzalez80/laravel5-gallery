@extends('layouts.backend')

@section('content')

	<a href="{{ URL::previous() }}" class="btn btn-default">Back</a>
	<a href="{{ route('photos.edit', $photo->id) }}" class="btn btn-default">Edit</a>
	
	<h1>{{ $photo->title }}</h1>
	
	<img src="{{ asset('img/uploads/'. $photo->image) }}" width="auto" height="auto">
	
	
	
@stop