<?php
	include './models/database.php';
	$obj = new Database('./models/info.php');
	$conn = $obj->Connect();

	$sql = mysqli_query($conn, "SELECT * FROM `doctors`");
    if(!$sql) echo "Error : Try Again";
?>