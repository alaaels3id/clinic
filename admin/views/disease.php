<?php 
	include '../models/database.php';
	$obj = new Database('../models/info.php');
	$conn = $obj->Connect();
	$q = "SELECT `disease` FROM `diseases`";
	$sql = @mysqli_query($conn, $q);
?>
<section>
	<div class="row">
		<div class="col-md-12 admin-aboutpage">
			<form method="POST">
			  	<div class="form-group">
			  		<h3>Disease Name</h3>
			    	<select name="disease" class="input-lg" style="width: 350px;">
			    		<?php 
			    			while($row = @mysqli_fetch_array($sql, MYSQLI_ASSOC)){
			    		?>
			    			<option value="<?php echo $row['disease']; ?>"><?php echo $row['disease']; ?></option>
			    		<?php
			    			}
			    		?>
			    	</select>
			  	</div>
			  	<div class="form-group">
			    	<input type="text" name="disease_trate" class="form-control input-lg" placeholder="Disease Tratement">
			  	</div>
			  	<input type="submit" name="submit" class="btn btn-lg btn-info" value="Save">
			</form>
		</div>
	</div>
</section>