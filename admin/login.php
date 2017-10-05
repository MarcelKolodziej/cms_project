<?php 
define("TITLE", "Home Page");
?>
<!DOCTYPE html>
<hmtl lang='en'>
<html>
<head>
	

	<title><?php echo TITLE; ?></title>

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Coustom CSS -->
	<link rel="stylesheet" href="style.css">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container">
	<div class="row main">
		<div class="panel-heading">
		<div class="panel-tittle text-center"><img src="../img/logo.png">
		<hr />
		</div>
	</div>
<form>
			   <div class="form-group row">
			    <label for="email" class="col-sm-2 col-form-label">Your Email</label>
			    <div class="col-sm-10">
			      <input type="login" class="form-control" id="inputLogin" placeholder="email">
			    </div>
			  </div>

			  <div class="form-group row">
			    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
			    <div class="col-sm-10">
			      <input type="password" class="form-control" id="inputPassword" placeholder="Password">
			    </div>
			  </div>

 		 <div class="form-group">
  		<button type="button" class="btn brn-primary btn-lg btn-block login-button">Login</button>
  </div>
</form>
	
</div>
<div class="container">
		&copy; Marcel Kolodziej @2017
		<a href="index.php" class="btn btn-danger" role="button">Admin</a>
</div>
</body>
</html>