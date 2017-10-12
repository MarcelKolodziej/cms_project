<?php
session_start();
require('../config/connect.php');

if(!isset($_SESSION['email']) & empty($_SESSION['email'])){
	header('location: login.php');
}

if(isset($_POST) & !empty($_POST)){
		$name = mysqli_real_escape_string($connection, $_POST['name']);
		$description = mysqli_real_escape_string($connection, $_POST['description']);

		$sql = "INSERT INTO category (name, description) VALUES ('$name', '$description')";

	if(!mysqli_query($connection,$sql))
	{
		echo'Not Inserted';
	}
	else
	{
		echo 'Inserted';
	}


}

?>
<?php include 'inc/header.php'; ?>
<?php include 'inc/nav.php'; ?>
<div class="container">	
		<div class="col-md-6">
 			<div class="panel panel-default">
				<div class="panel-body">
				 <form method="post">
				 	<div class="row">
				 		<div class="col-md-6">
				 		<form class="form-horizontal" method="post" action="#">
				 			<label>Category Name </label>
				 			<input name="name" class="form-control" placeholder="Category Name" value="" type="text" required="">
				 			<br>
				 			<label>Category Description</label>
				 			<textarea name="description" class="form-control' rows="3"></textarea>
				 			<br>
				 			<input type="submit" name="Add Category" class="btn btn-primary btn-lg">
				 		</form>
				 		</div>
				 	</div>


				 	<br>
				 	<div class="row">
				 	<div class="col-md-3"></div>
				 	</div>

				 </form>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="panel panel-default">
				<div class="panel-body">
					<form method="post">
						<div class="row">
							<div class="col-md-6">
							<form class="form-horizontal" method="post" action="#">
									<label> Select Main Category Name </label>
								<select class="form-control">
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
						<br>
						<label> Sub Category Name </label>
						<input name="name" class="form-control" placeholder="Category Name" value="" type="text" required="">
						<br>
						<label>Sub Category Description </label>
						<textarea name="description" class="form-control" rows="3"></textarea>
						<br>
						<input type="submit" value="Add Sub Category" class="btn btn-primary btn-lg">
		                    </form>
							</div>
						</div>						
					</form>	
				</div>
			</div>
		</div>
</div><!-- main container -->
<?php include 'inc/footer.php'; ?> 

