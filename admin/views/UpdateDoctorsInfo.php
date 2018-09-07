<h1>Update Doctors Inforamtion</h1>
<section>
	<div class="row">
		<div class="col-md-12 admin-aboutpage">
			<form method="POST">
				<div class="form-group">
			    	<input type="text" name="up_dr_name" class="form-control input-lg" placeholder="Doctor Name">
			  	</div>
				<div class="form-group">
			    	<input type="text" name="up_dr_specialty" class="form-control input-lg" placeholder="DR. Specialty">
			  	</div>
			  	<div class="form-group">
			    	<select name="up_state" class="input-lg" style="width: 350px;">
			    		<option value="0">Not in Clinic</option>
			    		<option value="1">in Clinic</option>
			    	</select>
			  	</div>
			  	<div class="form-group">
			    	<input type="text" name="up_dr_patient_num" class="form-control input-lg" placeholder="DR. Patient Num">
			  	</div>
			  	<input type="submit" name="submit" class="btn btn-lg btn-info" value="Update">
			</form>
		</div>
	</div>
</section>