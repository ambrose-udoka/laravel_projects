@extends('layouts.design')

@section('content')
<h2>List of Clubs</h2>

<a href ="#" class = 'btn btn-primary'>uu</a>

    <!-- // foreach ($clubs as $key => $value) {
    // 	foreach ($value as $key => $val) {
    // 		echo $val;
    // 	}
    // } -->

	<table class = 'table table-striped'>
		<tr>
			<th>S/N</th>
			<th>Clubname</th>
			<th>Description</th>
		</tr>
<?php
$i =1;
foreach ($clubs as $club) {
	$club_id = $club->club_id;
?>

		<tr>
			<td>{{ $i }}</td>
			<td><a href ='{{ url("/club/$club_id")}}'>{{ $club->club_name }}</a></td>
			<td>{{ $club-> club_desc}}</td>
		</tr>
<?php
$i++;

}
?>
	</table>

@endsection