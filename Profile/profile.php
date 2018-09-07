<?php
	$u = $_SESSION['username']; 
	include '../models/database.php';
	$obj = new Database('../models/info.php');
	$conn = $obj->Connect();
	
	$q1 = "SELECT * FROM `patient` WHERE `patient_name` = '$u'";
	$sql1 = @mysqli_query($conn, $q1);
	if(!$sql1) echo "Try Agian! 1";
?>