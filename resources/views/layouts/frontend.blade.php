<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="@yield('description')">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - @yield('title')</title>

    <!-- Styles -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/lightgallery/1.3.9/css/lightgallery.min.css">
	

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
	
		@include('partials.frontendnav')
        
		<div class="container">
		
			@include('partials.flash')
			
			@yield('content')
			
			<footer>
			<hr />
			Copyright
			</footer>
			
		</div>
    </div>

    <!-- Scripts -->
	<script src="//code.jquery.com/jquery-3.1.1.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="//cdn.jsdelivr.net/lightgallery/1.3.9/js/lightgallery.min.js"></script>
	
	@yield('footer')
	
</body>
</html>
