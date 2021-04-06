<!DOCTYPE html>
<html>
<head>
	<title>{{ config('app.name', 'My app name')}}</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
</head>
<body>
	<br><br>
<div class = 'container'>
	<div class = 'row'>
		<div class = 'col-md-3 alert alert-warning'>
			<?php if(Auth::check()){
				$user = Auth::user();
				echo $user->name;
		}
	?>
			<ul>
				<li>Home</li>
				<li>Clubs</li>
				<li>Logout</li>
			</ul>
		</div>
		<div class = 'col-md-9'>
@yield('content')
			
		</div>
	</div>
</div>

</body>
</html>