@extends('layouts.frontend')

@section('title', 'Category')

@section('description', 'Category')

@section('content')

	<div class="page-header">
	<h1>{{ $category->title }}</h1>
	</div>
	
	<div class="row">
	
	<div class="col-md-12">
	
	@if (count($galleries) < 1)
		<p><strong>No Galleries found ...</strong></p>
	@else
	
	@foreach ($category->galleries as $gallery)
	
	<article>
		
		<h2><a href="{{ url('gallery', [$gallery->category->slug, $gallery->slug]) }}">{{ $gallery->title }}</a></h2>
			
		<p><a href="{{ url('gallery', [$gallery->category->slug, $gallery->slug]) }}">View Gallery...</a></p>
		
	</article>
	
	@endforeach
	
	@endif
	
	@unless ($galleries < '11')
		<div class="pagination">
		{{ $galleries->links() }}
		</div>
	@endunless
	
	</div>
	
	</div>
	
	
@stop
