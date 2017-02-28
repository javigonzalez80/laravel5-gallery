@extends('layouts.backend')

@section('title', 'Administration')

@section('description', 'Administration')

@section('content')

	<div class="page-header">
	<h1>Administration</h1>
	<p>Welcome {{ Auth::user()->name }}</p>
	</div>
	
	<table class="table table-bordered">
		<thead>
			<tr>
				<th><a href="{{ url('/admin/categories') }}">Categories</a></th>
				<th><a href="{{ url('/admin/galleries') }}">Galleries</a></th>
				<th><a href="{{ url('/admin/photos') }}">Photos</a></th>
			</tr>
		</thead>
	</table>
	
@stop
