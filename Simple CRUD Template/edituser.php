<?php include 'inc/header.php'; ?>	

	<div class="container content_container">
			
			<div class="card">
				<div class="card-header bg-light">
					<h2>
						Update <strong>User</strong>
						<span class="float-right">
							<a class="btn btn-outline-dark" href="index.php">Home</a>
						</span>
					</h2>
				</div>

				
				<div class="card-body custom_card_body">
					
					<form action="lib/Process.php" method="POST" accept-charset="utf-8" class="bg-light custom_form">

						<div class="form-group">
							<label for="name">Name:</label>
							<input type="text" name="name" class="form-control" id="name" value="Ruman">
						</div>


						<div class="form-group">
							<label for="email">Email:</label>
							<input type="email" name="email" class="form-control" id="email" value="ruman@gmail.com">
						</div>

						<div class="form-group">
							<label for="number">Phone No:</label>
							<input type="number" name="number" class="form-control" id="number" value="0168xxxxx">
						</div>
						
						

						<div class="form-group">
							<input type="hidden" name="action" value="id">
							<input type="hidden" name="action" value="add">

							<button type="submit" name="update" class="btn btn-success">Update</button>
						</div>
						

					</form>

				</div>

			</div> <!-- card -->

		</div> <!-- body contents -->


<?php include 'inc/footer.php'; ?>