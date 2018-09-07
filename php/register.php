<?php
	if($_POST){
		if(isset($_POST['submit']) && $_POST['submit'] == "Register"){	
			$patientpagedata['username'] = $_POST['username'];
			$patientpagedata['password'] = $_POST['password'];
			try {
				include '../models/general.php';
				include '../models/insert.php';
				$object = new InsertInto($patientpagedata, 'users');
				if($object == TRUE) header('Location: /clinic/');
			} catch (Exception $e) {
				echo $e->getMessage();
			}
		}
	}else include 'views/login.htm';
?>