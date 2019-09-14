<?php  
include 'inc/header.php';
?>


<!-- login form -->
<div class="container content_container">

	<div class="card">

		<div class="card-header bg-light">
			<h3>User <strong>Login</strong></h3>
		</div>
		

		<div class="card-body">

			<form action="" method="POST" accept-charset="utf-8" class="custom_form">

				<div class="form-group">
					<label for="email">Username:</label>
					<input type="email" name="email" class="form-control" id="email">
				</div>

				<div class="form-group">
					<label for="password">Password:</label>
					<input type="password" name="password" class="form-control" id="password">
				</div>
				
				<div class="form-group">
					<button type="submit" name="login" class="btn btn-success">Login</button>

					<a href="index.php?id=1" class="btn btn-outline-secondary" type="submit" name="cancel">Cancel</a>

				</div>

			</form>

		</div><!-- card body -->

	</div><!-- card -->	
	
	
</div><!-- container -->


<?php include 'inc/footer.php'; ?>