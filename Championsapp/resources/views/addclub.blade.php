
<!-- Put Bootstrrap -->

@extends('layouts.frontend')
@section('content')

<div class = 'container'>
	<div class = 'row'>
		<div class = 'col-md-6'>
			<form method = 'post' action = "{{route('clubs.store')}}" enctype="multipart/form-data">
				@CSRF
				<input type = text name = 'clubname' placeholder="club name" class = 'form-control'>
				<input type = text name = 'year' placeholder="year established" class = 'form-control'>
				<input type = text name = 'stadium' placeholder="stadium name" class = 'form-control'>
				<select name = 'status' class = 'form-control'>
					<option value =''>Select Status</option>
					<option value =''>Promoted</option>
					<option value =''>Relegated</option>

				</select>

					<select name = 'country' class = 'form-control'>
					<option value =''>Select Country</option>
				</select>
				<input type = 'file'>

			</form>
		</div>
	</div>

</div>


@endsection