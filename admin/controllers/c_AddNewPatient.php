<h1>Patient Page</h1>
<?php 
	if(isset($_POST['submit']) && $_POST['submit'] == "Save"){
		$patientpagedata['patient_name']       = $_POST['patient_name'];
		$patientpagedata['patient_come_date']  = $_POST['patient_come_date'];
		$patientpagedata['patient_treated_dr'] = $_POST['patient_treated_dr'];
		try {
			include '../models/general.php';
			include '../models/insert.php';
			$object = new InsertInto($patientpagedata, 'patient');
			if($object == TRUE) echo "Done Operation";
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}else include 'views/AddNewPatient.php';
?>