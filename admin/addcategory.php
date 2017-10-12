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
		$res = mysqli_query($connection, $sql);
		if($res){
			$smsg = "Sub Category Added Successfully";
		}else{
			$fmsg = "Failed to Add Sub Category";
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
					<?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
					<?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
					<form class="form-horizontal" method="post" action="#">
						<label>Category Name </label>
						<input name="name" class="form-control" placeholder="Category Name" value="" type="text" required="">
						<br>
						<label>Category Description </label>
						<textarea name="description" class="form-control" rows="3"></textarea>
						<br>
						<input type="submit" value="Add Category" class="btn btn-primary btn-lg">
					</form>
					</div>
					<div class="col-md-6">
						
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
					<?php if(isset($ssmsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $ssmsg; ?> </div><?php } ?>
					<?php if(isset($sfmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $sfmsg; ?> </div><?php } ?>
					<form class="form-horizontal" method="post" action="#">
						<label> Select Main Category Name </label>
						<select name="maincat" class="form-control">
							<?php 
								$selsql = "SELECT * FROM category";
								$selres = mysqli_query($connection, $selsql);
								while($selr = mysqli_fetch_assoc($selres)){
							?>
						  <option value="<?php echo $selr['id']; ?>"><?php echo $selr['name']; ?></option>
						  <?php } ?>
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
	</div><!--md-6 -->
</div><!-- main container -->
<?php include 'inc/footer.php'; ?> 

