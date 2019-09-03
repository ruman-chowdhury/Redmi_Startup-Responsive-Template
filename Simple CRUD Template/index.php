<?php include 'inc/header.php'; ?>	


		<!-- body contents -->
		<div class="container content_container">
			
			<div class="card">
				<div class="card-header bg-light">
					<h2>
						User <strong>List</strong>
						<span class="float-right">
							<a class="btn btn-success" href="adduser.php">Add User</a>
						</span>
					</h2>
				</div>

				<div class="card-body custom_card_body">
					<table class="table table-borderless">
						<tr >
							<th>Serial</th>
							<th>Name</th>
							<th>Email</th>
							<th>Phone No</th>
							<th>Action</th>
						</tr>

						<tr>
							<td>01</td>
							<td>Ruman Chowdhury</td>
							<td>ruman@gmail.com</td>
							<td>017xxxxxx</td>
							<td>
								<a class="btn btn-outline-secondary btn-sm" href="edituser.php?id=1">Edit</a>
								<a class="btn btn-danger btn-sm" href="lib/Process.php?action=delete & id=1" onclick="return confirm('Are you sure to delete?')">Delete</a>
							</td>
						</tr>



					</table>
				</div>

			</div> <!-- card -->

		</div> <!-- body contents -->
		
	</div><!-- main container -->


<?php include 'inc/footer.php'; ?>
