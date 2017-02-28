@extends('layouts.backend')

@section('content')

	<a href="{{ URL::previous() }}" class="btn btn-default">Back</a>
	
	<h1>{{ $gallery->title }}</h1>
	
	<p><strong>Category</strong>:{{ $gallery->category->title }}</p>
	<p><strong>Slug</strong>:{{ $gallery->slug }}</p>
	
	<hr>
	
	@unless ($gallery->photos->isEmpty())
		<p>Photos:</p>
		<ul>
			@foreach ($gallery->photos as $photo)
				<a href="{{ route('photos.show', $photo->id) }}">
					<img src="{{ asset('img/uploads/'. $photo->image) }}" width="160px" height="120px">
				</a>
			@endforeach
		</ul>
	@endunless
	
	
	
@stop