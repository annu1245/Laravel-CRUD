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
<style type="text/css">
	.box{
		width:50%;
		margin-top: 5%;
		margin-left: 25%;
		background-color: #ffffff;
		box-shadow: 5px 10px 18px #888888;
		padding:2%;

	}
</style>
</head>
<body>
	<div class="box">
	<form action="/insert_data/" method="POST">
		@csrf
	<div class="form-group">
	<label for="name">NAME: </label>
	<input type="text" name="name" class="form-control">
	</div>

	<div class="form-group">
	<label for="name">Enrollment </label>
	<input type="text" name="enrollment" class="form-control">
	</div>
	<input type="submit" class="btn btn-success" name="submit">
	</form>
</div>
</body>
</html>