<?php 
define("TITLE", "Admin");
?>
<!DOCTYPE html>
<hmtl lang='en'>
<html>
<head>
	

	<title><?php echo TITLE; ?></title>

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Coustom CSS -->
	<link rel="stylesheet" href="style .css">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-md-4"><img src="img/logo.png"></div>
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
				Basic panel example
			</div>
		</div>

		<div class="panel panel-default">
		<div class="panel-body">
				Basic panel example
			</div>
		</div>

		<div class="panel panel-default">
		<div class="panel-body">
				Basic panel example
			</div>
		</div>
	</div><!-- col-md-8 -->

	<div class="col-md-4">
	<div class="panel panel-default">
		<div class="panel-body">
				Basic panel example
			</div>
		</div>

		<div class="panel panel-default">
		<div class="panel-body">
				Basic panel example
			</div>
		</div>


		<div class="panel panel-default">
		<div class="panel-body">
				Basic panel example
			</div>
		</div>

	</div><!-- col-md-4 -->

</div>	
</div>

</body>
</html>