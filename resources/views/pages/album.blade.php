@extends('layouts.frontend')

@section('title', 'Album')

@section('description', 'Album')

@section('content')

	<a href="{{ URL::previous() }}" class="btn btn-default">Back</a>
	
	<div class="page-header">
	<h1>{{ $gallery->title }}</h1>
	</div>
	
	<div id="lightgallery">
	@foreach ($gallery->photos as $photo)
		<a href="{{ asset('img/uploads/'. $photo->image) }}">
			<img src="{{ asset('img/uploads/'. $photo->image) }}" width="160px" height="120px">
		</a>
	@endforeach
	</div>
	

	@section('footer')
		
		<script>
			$(document).ready(function() {
				$("#lightgallery").lightGallery();
			});
		</script>
		
	@endsection
	
@stop
