<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body style="margin-top: 2%;">

<a href="/view_student_form/" style="float:right; margin-right: 5%;" class="btn btn-primary">ADD STUDENT</a>
<div class="container-fluid">
<table class="table table-hover table-striped">

	<tr>
		<th>NAME</th>
		<th>Enrollment</th>
		<th>DELETE</th>
		<th>UPDATE</th>
	</tr>

	@foreach($data as $row)
	<tr>
		<td>{{$row->name}}</td>
		<td>{{$row->enrollment}}</td>
		<td><a href="/delete_student/{{$row->id}}" class="btn btn-danger">DELETE</a></td>
		<td><a href="/show_update/{{$row->id}}" class="btn btn-success">UPDATE</a></td>
	</tr>
	@endforeach
</table>
</div>
</body>
</html>