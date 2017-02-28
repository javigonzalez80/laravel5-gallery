@extends('layouts.frontend')

@section('title', 'Photogallery')

@section('description', 'Photogallery')

@section('content')

	<div class="page-header">
	<h1>Photogallery</h1>
	</div>
	
	<div class="row">
	
	<div class="col-md-12">
	
	@if (count($categories) < 1)
		<p><strong>No Categories found ...</strong></p>
	@else
	
	@foreach ($categories as $category)
	
	<article>
		
		<h2><a href="{{ url('gallery', $category->slug) }}">{{ $category->title }}</a></h2>
			
		<p><a href="{{ url('gallery', $category->slug) }}">View Category...</a></p>
		
		
	</article>
	
	@endforeach
	
	@endif
	
	@unless ($categories < '11')
		<div class="pagination">
		{{ $categories->links() }}
		</div>
	@endunless
	
	</div>
	
	</div>
	
	
@stop
