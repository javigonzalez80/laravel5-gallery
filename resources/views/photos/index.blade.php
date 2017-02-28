@extends('layouts.backend')

@section('content')

	<h1>Photos</h1>
	
	<a href="{{ url('admin/photos/create') }}" class="btn btn-primary btn-md" role="button">Upload Photo</a>
	
	<hr/>
	
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>Id</th>
				<th>Title</th>
				<th>Gallery</th>
				<th>Show Photo</th>
				<th>Edit Photo</th>
				<th>Delete Photo</th>
			</tr>
		</thead>
		<tbody>
	
	@foreach ($photos as $photo)
	
			<tr>
				<td>{{ $photo->id }}</td>
				<td>{{ $photo->title }}</td>
				<td>{{ $photo->gallery->title }}</td>
				<td><a href="{{ route('photos.show', $photo->id) }}">Show</a></td>
				<td><a href="{{ route('photos.edit', $photo->id) }}">Edit</a></td>
				<td>
					{!! Form::open([
						'method' => 'DELETE',
						'route' => ['photos.destroy', $photo->id]
					]) !!}
					{!! Form::submit('Delete Photo?', ['class' => 'btn btn-danger']) !!}
					{!! Form::close() !!}
				</td>
			</tr>
	@endforeach
	
		</tbody>
	</table>

@stop