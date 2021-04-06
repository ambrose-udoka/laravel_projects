<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

	<title></title>
</head>
<body>
<div class = 'container-fluid'>
	<div class = 'row'>
		<div class = 'col-md-4'>
			<ul>
				<li>
					<a href = "{{url('/')}}">Home</a>

				</li>

				<li>
					<a href = "{{route('clubs.create')}}">Add Club</a>

				</li>
			</ul>
		</div>
		<div class = 'col-md-8'>
			@yield('content')
		</div>
	</div>
</div>
</body>
</html>