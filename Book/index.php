<?php
	session_start();
	if(!isset($_SESSION['username'])){
		include '../inc/controller.php';
		die();
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Book</title>
    <?php include '../inc/links.php'; ?>
</head>
<body>
    <!-- Header -->
    <?php include '../inc/head.php'; ?>
	<?php include '../inc/header.php';?>
    <section>
        <div class="container">
            <div class="row" style="padding-top: 5px;">
                <div class="col-md-12" style="background-color: #ddd; color: #000; outline: 5px solid #fff;">
                    <form style="width:500px;" action="../inc/book.php" method="post">
                        <div class="form-group">
                            <h4>Enter Your Name:</h4>
                            <input name="b_patient_name" type="text" class="form-control input-lg">
                        </div>
                        <div class="form-group">
                            <h4>Select Your Doctor:</h4>
                            <select name="b_patient_dr" class="input-lg" style="width: 500px;">
                            <?php
                                include '../models/database.php';
                                $obj = new Database('../models/info.php');
                                $conn = $obj->Connect();
                                $q = "SELECT `dr_name` FROM `doctors`";
                                $sql = mysqli_query($conn, $q); 
                                while($row = @mysqli_fetch_array($sql, MYSQLI_ASSOC)){
                                    echo "<option value=\"{$row['dr_name']}\">{$row['dr_name']}</option>";
                                }
                            ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <h4>Assign Your Date:</h4>
                            <input name="b_patient_date" type="date" class="form-control input-lg">
                        </div>
                        <div class="form-group">
                            <input name="submit" type="submit" value="Book Now" class="btn btn-lg btn-success">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php include '../inc/footer.php'; ?>
    <?php include '../inc/scripts.php'; ?>
</body>
</html>