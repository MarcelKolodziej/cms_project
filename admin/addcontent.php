<?php include 'inc/header.php'; ?>
<?php include 'inc/nav.php'; ?>

<div class="container">	
		<div class="col-md-8">
 			<div class="panel panel-default">
				<div class="panel-body">
				 <form method="post">
				 	<div class="row">
				 		<div class="col-md-6">
				 			<label>Product Name </label>
				 			<input name="name" name="form-control" placeholder="Product Name" value="" type="text" required="">
				 		</div>
				 		<div class="col-md-6">
				 			<label>Product Name </label>
				 			<input name="name" name="form-control" placeholder="Product Cost" value="" type="text" required="">
				 		</div>
				 	</div>
					<div class="row">
						<div class="col-md-6">
							<label>Stock</label>
							<input name="name" name="form-control" placeholder="Product Stock" value="" type="text" required="">
				 		</div>
				 	
				 		<div class="col-md-6">

				 		</div>
				 	</div>

				 	<br>
				 	<div class="row">
				 	<div class="col-md-9"></div>
				 	<div class="col-md-3"><p><input type="submit" value="Add Product" class="btn btn-primary btn-lg"></div>
				 	</div>

				</form>
			</div>
		</div>
	</div>
	
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
	
</div><!-- main container -->
<?php include 'inc/footer.php'; ?> 

