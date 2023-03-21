<?php
$con = mysqli_connect("localhost","root","","rahul-db");
session_start();

if(!isset($_SESSION['email']))
{
	header("location:index.php");
}
?> 
<html>
<head>
	<title>Login Form</title>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
<style>
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand text-light" href="#">DASHBOARD</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        
	  </div>
	   <!--<form>-->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active btn btn-warning text-dark" aria-current="page" href="logout.php">Logout</a>
          </li>
		</ul>
</nav>
		
</body>
</html>

<?php
	
	
	if(isset($_POST['sbt']))
	{
		$choice = $_POST['choice'];
		echo "<h1><center>".$choice."</h1></center>";
		
		echo "<img src='https://source.unsplash.com/random/300x400/?".$choice."'>";
	}
?>
	
