<?php $title = "Details";
require 'header.php'; ?>

<?php require 'php/bsubmited.php'; ?><!--------CONNECTION WITH BACKEND FILES OF PHP---------->


	<div class="container-fluid">
		<div class="row">

		<!------HERE IS LEFT NAVBAR----->
    	<?php require 'left_nav.php'; ?><!--COL-SM-2 is RESERVED HERE--->

			<div class="col-sm-10 border">
				<table class="table">
					<br />
					<center><h2>DATA SUCCESSFULLY SAVED</h2></center>
					<br />
					<thead>
						<tr>
							<th>Id</th>
							<th>First Name</th>
							<th>Last Name</th>
							<th>Age</th>
							<th>Gender</th>
							<th>Quilification</th>
							<th>Email</th>
							<th>Phone</th>
							<th>Address</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><?php echo $last_id ?></td>
							<td><?php echo $fname ?></td>
							<td><?php echo $lname ?></td>
							<td><?php echo $age ?></td>
							<td><?php echo $gender ?></td>
							<td><?php echo $quilification ?></td>
							<td><?php echo $email ?></td>
							<td><?php echo $phone ?></td>
							<td><?php echo $address ?></td>
						</tr>
					</tbody>
				</table>
				<center><a href="index.php" class="btn btn-primary">View Data</a></center>
			</div>
		</div>
	</div>
<?php require 'footer.php'; ?>