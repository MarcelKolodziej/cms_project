<?php
session_start();
require('config/connect.php');



?>
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

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="styles.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
	body {background-color: lightgrey;}


</style>


</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-md-4" id class="row"><img src="img/logo.png"></div>
		<div class="col-md-8"></div>
	</div>
	<div class="row">
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
		        <li><a href="#">Link</a></li>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="#">Action</a></li>
		            <li><a href="#">Another action</a></li>
		            <li><a href="#">Something else here</a></li>
		            <li role="separator" class="divider"></li>
		            <li><a href="#">Separated link</a></li>
		            <li role="separator" class="divider"></li>
		            <li><a href="#">One more separated link</a></li>
		          </ul>
		        </li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
	</div>
	<div class="container">
		<div class="col-md-8">

		<div class="panel panel-default">
		<div class="panel-body">
			<h2> Article Title </h2>
				Basic panel example
			</div>
		</div>

		<div class="panel panel-default">
		<div class="panel-body">
		<h2> Article Title </h2>
			Basic panel example
			</div>
		</div>

		<div class="panel panel-default">
		<div class="panel-body">
		<h2> Article Title </h2>
			Basic panel example
			</div>
		</div>
		<nav aria-label="Page navigation">
		  <ul class="pagination">
		    <li>
		      <a href="#" aria-label="Previous">
		        <span aria-hidden="true">&laquo;</span>
		      </a>
		    </li>
		    <li><a href="#">1</a></li>
		    <li><a href="#">2</a></li>
		    <li><a href="#">3</a></li>
		    <li><a href="#">4</a></li>
		    <li><a href="#">5</a></li>
		    <li>
		      <a href="#" aria-label="Next">
		        <span aria-hidden="true">&raquo;</span>
		      </a>
		    </li>
		  </ul>
		</nav>
	</div><!-- col-md-8 -->
	<div class="col-md-4">
		<div class="panel panel-default">
		<div class="panel-heading">Categories</div>
		<div class="panel-body">
				Basic panel example
			</div>
		</div>

		<div class="panel panel-default">
		<div class="panel-heading">Recent Comments</div>
		<div class="panel-body">
				Basic panel example
			</div>
		</div>

		<div class="panel panel-default">
		<div class="panel-heading">Recent Articles</div>
		<div class="panel-body">
				Basic panel example
			</div>
		</div>
		</div><!-- col-md-4 -->
	</div>	
</div><!-- main container -->

<div class="container">
		&copy; Marcel Kolodziej @2017
		<a href="admin/index.php" class="btn btn-danger" role="button">Admin</a>
</div>
</body>
</html>
