		<div class="form-group">
			{!! Form::label('category_id', 'Category:') !!}
			{!! Form::select('category_id', $categories, null, ['id' => 'category_id', 'class' => 'form-control']) !!}
		</div>
		
		<div class="form-group">
			{!! Form::label('title', 'Title:') !!}
			{!! Form::text('title', null, ['class' => 'form-control']) !!}
		</div>
		
		<div class="form-group">
			{!! Form::label('slug', 'URL:') !!}
			{!! Form::text('slug', null, ['class' => 'form-control']) !!}
		</div>
		
		<div class="form-group">
			{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
		</div>
		
		@section('footer')
		
		<script>
			$('select#category_id.form-control').select2({
				placeholder: 'Choose a Category'
			});
		</script>
		
		@endsection
		
		