<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<style>
		body{
			background-image:url('bg4.jpg');
		}	
		.new{
			background-color:#FFFFF5;
			opacity:70%;
		}
		.new:hover{
			background-color:#FFFFF5;
			opacity:100%;
			transform:scale(1.1);
			transition-duration:2s;
		}
	</style>
</head>
<body>
	<div class="container mt-5">
		<div class="row justify-content-center">
			<div class="col-md-6">
				<div class="card new">
					<div class="card-header">
						<h4>Login Form</h4>
					</div>
					<div class="card-body">
						<form action="#" method="post">
							<div class="form-group">
								<label for="email" class="text-primary">Email:</label>
								<input type="email" class="form-control" id="email" name="email" required>
							</div>
							<div class="form-group">
								<label for="password" class="text-primary">Password:</label>
								<input type="password" class="form-control" id="password" name="pwd" required>
							</div>
							<button name="sbt" type="submit" class="btn btn-primary container-fluid">Login</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	
</body>
</html>

<?php

if(isset($_POST['sbt']))
{
	$email = $_POST['email'];
	$pwd = $_POST['pwd'];

	$con = mysqli_connect("localhost","root","","rahul-db");
	$sql = "SELECT * FROM `login` WHERE `email` = '$email' AND `pwd` = '$pwd'";

	$res = mysqli_query($con,$sql);
	$row = mysqli_fetch_assoc($res);
	$count = mysqli_num_rows($res);

	if($count > 0)
	{
		session_start();
		$_SESSION['email'] = $_POST['email'];
		$_SESSION['pwd'] = $_POST['pwd'];
		header("location:data.php");
	}
	else
	{
		echo "<h3><center>Login isn't valid</center></h3>";
	}
}
?>