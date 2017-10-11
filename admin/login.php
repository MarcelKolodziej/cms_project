 <?php  
session_start();
 require('../config/connect.php');
if (isset($_POST) and !empty($_POST)){
	$email = mysqli_real_escape_string($connection, $_POST['email']);
	$password = md5(mysqli_real_escape_string($connection, $_POST['password']));
	$query = "SELECT * FROM `users` WHERE email='$email' and password='$password'";
	 
	$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
	$count = mysqli_num_rows($result);
	if ($count == 1){
		$_SESSION['email'] = $email;
		header('location: index.php');
		//echo "user exists";
	}else{
		$fmsg = "Invalid Login Credentials.";
	}
}
?>
<?php 
define("TITLE", "Login");
?>
<!DOCTYPE html>
<hmtl lang='en'>
<html>
<head>
	
	<title><?php echo TITLE; ?></title>

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Coustom CSS -->
	<link rel="stylesheet" href="styles.css">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<style>
	body { background-color: lightbluez }

	</style>
</head>
<body>
<div class="container">
			<div class="row main">
				<div class="panel-heading">
					<div class="panel-title text-center">
						<img src="../img/logo.png">
						<hr />
					</div>
				</div>
				<div class="main-login main-center">
					<?php if(isset($fmsg)) { ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
					<form class="form-horizontal" method="post" action="#">

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Your Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email" placeholder="Enter Your Email"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password" placeholder="Enter Your Password"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<button type="submit" class="btn btn-primary btn-lg btn-block login-button">Login</button>
						</div>
					</form>
					<div class="container">
		&copy; Marcel Kolodziej @2017
		<a href="index.php" class="btn btn-danger" role="button">Admin</a>
</div>
				</div>

			</div>

		</div>
		
</body>
</html>