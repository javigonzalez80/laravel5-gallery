		<div class="form-group">
			{!! Form::label('gallery_id', 'Gallery:') !!}
			{!! Form::select('gallery_id', $galleries, null, ['id' => 'gallery_id', 'class' => 'form-control']) !!}
		</div>
		
		<div class="form-group">
			{!! Form::label('title', 'Title:') !!}
			{!! Form::text('title', null, ['class' => 'form-control']) !!}
		</div>
		
		<div class="form-group">
			{!! Form::label('image', 'Image:') !!}
			{!! Form::file('image', ['class' => 'form-control']) !!}
		</div>
		
		<div class="form-group">
			{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
		</div>
		
		@section('footer')
		
		<script>
			$('select#gallery_id.form-control').select2({
				placeholder: 'choose a Gallery'
			});
		</script>
		
		@endsection
		
		