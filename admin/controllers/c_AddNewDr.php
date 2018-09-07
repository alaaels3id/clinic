<h1>Add New Doctor Page</h1>
<?php 
	if(isset($_POST['submit']) && $_POST['submit'] == "Save"){
		$drpagedata['dr_name']        = $_POST['dr_name'];
		$drpagedata['dr_specialty']   = $_POST['dr_specialty'];
		$drpagedata['dr_patient_num'] = $_POST['dr_patient_num'];
		$drpagedata['state']          = $_POST['state'];
		try {
			include '../models/general.php';
			include '../models/insert.php';
			$object = new InsertInto($drpagedata, 'doctors');
			if($object == TRUE) echo "<h1>Done Operation</h1>";
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}else include 'views/AddNewDr.php';
?>