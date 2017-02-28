@extends('layouts.backend')

@section('content')

	<h1>Gallery</h1>
	
	<a href="{{ url('admin/galleries/create') }}" class="btn btn-primary btn-md" role="button">Create Gallery</a>
	
	<hr/>
	
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>Id</th>
				<th>Title</th>
				<th>Show Gallery</th>
				<th>Edit gallery</th>
				<th>Delete gallery</th>
			</tr>
		</thead>
		<tbody>
	
	@foreach ($galleries as $gallery)
	
			<tr>
				<td>{{ $gallery->id }}</td>
				<td>{{ $gallery->title }}</td>
				<td><a href="{{ route('galleries.show', $gallery->id) }}">Show</a></td>
				<td><a href="{{ route('galleries.edit', $gallery->id) }}">Edit</a></td>
				<td>
					{!! Form::open([
						'method' => 'DELETE',
						'route' => ['galleries.destroy', $gallery->id]
					]) !!}
					{!! Form::submit('Delete gallery?', ['class' => 'btn btn-danger']) !!}
					{!! Form::close() !!}
				</td>
			</tr>
	@endforeach
	
		</tbody>
	</table>

@stop