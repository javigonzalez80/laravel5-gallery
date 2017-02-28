@extends('layouts.backend')

@section('content')

	<a href="{{ URL::previous() }}" class="btn btn-default">Back</a>
	
	<h1>{{ $category->title }}</h1>
	
	<hr/>
	
	<p><strong>Slug:</strong> {{ $category->slug }}</p>
	
	
@stop