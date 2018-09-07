<?php 
	include '../models/database.php';
	$obj = new Database('../models/info.php');
	$conn = $obj->Connect();
	$q = "SELECT * FROM `doctors`";
	$sql = @mysqli_query($conn, $q);
?>
<section>
	<div class="row">
		<div class="col-md-12 admin-aboutpage">
			<table class="table">
				<thead>
					<tr>
						<th>ID</th>
						<th>Doctor Name</th>
						<th>Specialty</th>
						<th>Number of Patients</th>
						<th>State</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						while($row = @mysqli_fetch_array($sql, MYSQLI_ASSOC)){
					?>
						<tr>
							<td><?php echo $row['id'];?></td>
							<td><?php echo $row['dr_name']?></td>
							<td><?php echo $row['dr_specialty']?></td>
							<td><?php echo $row['dr_patient_num']?></td>
							<td>
								<?php 
									echo $row['state'] == 0 ? "<span style=\"color: red;\">OFF</span>" : "<span style=\"color: green;\">ON</span>"; 
								?>
							</td>
							<td>
								<a href="?page=ShowDoctors&action=update&id=<?php echo $row['id']; ?>" class="btn btn-info">Update</a>
								<a href="?page=ShowDoctors&action=delete&id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
							</td>
						</tr>
					<?php
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
</section>