<?php 
	if(isset($_POST['submit']) && $_POST['submit'] == "Book Now"){
		$bookpagedata['b_patient_name'] = $_POST['b_patient_name'];
		$bookpagedata['b_patient_dr']   = $_POST['b_patient_dr'];
		$bookpagedata['b_patient_date'] = $_POST['b_patient_date'];
		try {
			include '../models/general.php';
			include '../models/insert.php';
			$object = new InsertInto($bookpagedata, 'book');
			if($object == TRUE) header('Location: http://localhost/clinic/');
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}
?>