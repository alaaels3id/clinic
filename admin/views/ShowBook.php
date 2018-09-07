<h1>The Booked Patients</h1>
<section>
	<div class="row">
		<div class="col-md-12 admin-aboutpage">
			<table class="table">
				<thead>
					<tr>
						<th>ID</th>
						<th>Patient Name</th>
						<th>Dr Name</th>
						<th>Booking Date</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						while($row = @mysqli_fetch_array($sql, MYSQLI_ASSOC)){
							echo "<tr>";
							echo "<td>{$row['id']}</td>";
							echo "<td>{$row['b_patient_name']}</td>";
							echo "<td>{$row['b_patient_dr']}</td>";
							echo "<td>{$row['b_patient_date']}</td>";
							echo "</tr>";
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
</section>