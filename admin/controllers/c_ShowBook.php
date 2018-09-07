<?php
	include '../models/database.php';
	$obj = new Database('../models/info.php');
	$conn = $obj->Connect();
	$q = "SELECT * FROM `book`";
	$sql = mysqli_query($conn, $q); 
	include 'views/ShowBook.php';
?>