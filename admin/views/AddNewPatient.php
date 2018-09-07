<?php 
	include '../models/database.php';
	$obj = new Database('../models/info.php');
	$conn = $obj->Connect();
	
?>
<section>
	<div class="row">
		<div class="col-md-12 admin-aboutpage">
			<form method="POST">
				<div class="form-group">
					<select name="patient_name" class="input-lg" style="width: 500px;">
			    		<?php
			    			$q1 = "SELECT `username` FROM `users`";
							$sql1 = mysqli_query($conn, $q1);
			    			while($row1 = mysqli_fetch_array($sql1, MYSQLI_ASSOC)){
								$patient_name = $row1['username'];
								echo "<option value=\"$patient_name\">".ucfirst($patient_name)."</option>";
							}
			    		?>
			    	</select>
				</div>
				<div class="form-group">
					<h4>Date To Come</h4>
			    	<input class="input-lg" style="width: 500px;" type="date" class="form-control" name="patient_come_date"/>
			  	</div>
			  	<div class="form-group">
			  		<h4>Treated Doctor</h4>
			    	<select name="patient_treated_dr" class="input-lg" style="width: 500px;">
			    		<?php
			    			$q = "SELECT `dr_name` FROM `doctors`";
							$sql = mysqli_query($conn, $q);
			    			while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)){
								$dr_name = $row['dr_name'];
								echo "<option value=\"$dr_name\">".ucfirst($dr_name)."</option>";
							}
			    		?>
			    	</select>
			  	</div>
			  	<div class="form-group">
			  		<h4>Select The Patient Trate</h4>
			  		<select name="patient_disease_trate" class="input-lg" style="width: 500px;">
			  			<?php
			  				$q3 = "SELECT `disease_trate` FROM `diseases`";
			  				$sql3 = @mysqli_query($conn, $q3);
			  				while($row3 = @mysqli_fetch_array($sql3, MYSQLI_ASSOC)){
			  			?>
			  				<option value="<?php echo $row3['disease_trate']; ?>"><?php echo $row3['disease_trate']; ?></option>
			  			<?php 
			  		}
			  			 ?>
			  		</select>
			  	</div>
			  	<input type="submit" name="submit" class="btn btn-info" value="Save">
			</form>
		</div>
	</div>
</section>