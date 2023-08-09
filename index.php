<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<!-- Include Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
</head>
<body>
<?php
include('modules/db.php');
include('modules/user.php');
$db = new Database();

$user = new User;


if(isset($_POST['submit'])){
	

	$username =  $_POST['username'];
	$password =  $_POST['password'];
	$e_mail =  $_POST['email'];
	 $imagename = $_FILES['image']['name'];
	 $imagetmp_name = $_FILES['image']['tmp_name'];

	 $location = "uploads/".$imagename;

	 move_uploaded_file($imagetmp_name, $location);

	 $user->createUser($username, $password, $e_mail, $imagename);






}


?>
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<h2>Login Form</h2>
				<form role="form"  method="POST"  enctype= "multipart/form-data">
					<div class="form-group">
						<label for="username">Username:</label>
						<input type="text" class="form-control" id="username"  name="username">
					</div>
					<div class="form-group">
						<label for="password">Password:</label>
						<input type="password" class="form-control" id="password" name="password">
					</div>
					<div class="form-group">
						<label for="email">Email:</label>
						<input type="email" class="form-control" id="email" name="email">
					</div>

					<div class="form-group">
						<input type="file" name="image" class="form-contol" >
					</div>
					<button type="submit" name="submit" class="btn btn-default">Submit</button>
				</form>
			</div>
		</div>
	</div>

	<!-- Include jQuery -->
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<!-- Include Bootstrap JS -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>
