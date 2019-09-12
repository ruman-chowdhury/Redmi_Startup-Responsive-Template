<?php  
	include 'inc/header.php';
?>
				
		<!-- body contents -->
		<div class="container content_container">
			
			<div class="card">
				<div class="card-header bg-light">
					<h2>
						User <strong>List</strong>
						<span class="float-right"> <strong> Welcome!</strong> Ruman</span>
					</h2>
				</div>

				<div class="card-body custom_card_body">
					<table class="table table-borderless">
						<tr>
							<th>Serial</th>
							<th>Name</th>
							<th>Username</th>
							<th>Email</th>
							<th>Action</th>
						</tr>
						

						<tr>
							<td>01</td>
							<td>Ruman Chowdhury</td>
							<td>ruman</td>
							<td>rumanc3456@gmail.com</td>
							<td>
								<a class="btn btn-outline-secondary btn-sm" href="profile.php?edit=1">Edit</a>
								
								<a class="btn btn-danger btn-sm" href="index.php?del=1" onclick="return confirm('Are you sure to delete?')">Delete</a>
							</td>
						</tr>
						
					</table>
				</div>

			</div> <!-- card -->

		</div> <!-- body contents -->

	
	</div><!--container-->


<?php include 'inc/footer_index.php';?>