<h1>Disease Page</h1>
<?php
	if(isset($_POST['submit']) && $_POST['submit'] == "Save"){
		$diseasedata['disease']       = $_POST['disease'];
		$diseasedata['disease_trate'] = $_POST['disease_trate'];
		try {
			include '../models/general.php';
			include '../models/insert.php';
			$obj = new InsertInto($diseasedata, "diseases");
			if($obj == TRUE){
				echo "<h1>Operation Done</h1>";
			}
		} catch (Exception $e) {
			echo $e->getMessage();
		} 
	}else include 'views/disease.php';
?>