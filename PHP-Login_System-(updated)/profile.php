<?php  
include 'inc/header.php';
?>
<!-- login form -->
<div class="container content_container">

	<div class="card">

		<div class="card-header ">
			<h3>
				User <strong>Profile</strong>
				<span class="float-right"><a class="btn btn-outline-dark" href="index.php">Back</a></span>
			</h3>
		</div>


		<div class="card-body bg-light">

			<form action="" method="POST" accept-charset="utf-8" class=" custom_form">

				<div class="form-group">
					<label for="name">Name:</label>
					<input type="text" name="name" class="form-control" id="name" value="Ruman chowdhury">
				</div>

				<div class="form-group">
					<label for="username">Username:</label>
					<input type="text" name="username" class="form-control" id="username" value="ruman">
				</div>

				<div class="form-group">
					<label for="email">Email:</label>
					<input type="email" name="email" class="form-control" id="email" value="rumanc3456@gmail.com">
				</div>

				
				<div class="form-group">
					<button type="submit" name="update" class="btn btn-success">Update Profile</button>

					<a class="btn btn-outline-dark" href="changePass.php?id=1"> Change Password </a>
				</div>


			</form>

		</div>

	</div><!-- card -->	
	
	
</div><!-- container -->


<?php include 'inc/footer.php';?>