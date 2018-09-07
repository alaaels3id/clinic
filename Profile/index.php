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

    <title>Profile</title>
    <?php include '../inc/links.php'; ?>
    <style type="text/css">
        #head{ background-color: #515B67; color: #fff;}
        #head2{ color: #ddd;}
        #head, #head2{ text-transform: none; font-family: 'Segoe UI Light','Segoe UI';}
        #head2{ font-weight: bold; padding-left: 20px; }
    </style>
</head>
<body>
    <!-- Header -->
    <?php include '../inc/head.php'; ?>
	<?php include '../inc/header.php';?>
    <section>
        <div class="container">
            <div class="row" style="padding-top: 5px;">
                <h1 class="text-center" style="padding: 80px; background-color: #515B67; color: #fff; border-radius: 30px;">
                    The Patient Final Prescription
                </h1>
                <div class="col-md-12" style="background-color: #515B67; color: #fff; outline: 5px solid #fff; border-radius: 30px; padding: 50px;">
                    <?php include 'profile.php'; ?>
                    <div class="col-md-5">
                        <?php 
                            $row1 = @mysqli_fetch_array($sql1, MYSQLI_ASSOC);
                        ?>
                        <h1 id="head">Patient ID :</h1>
                        <h2 id="head2">*** <?php echo $row1['id'];?> ***</h2>
                        <h1 id="head">Patient Name :</h1>
                        <h2 id="head2">*** <?php echo ucfirst($_SESSION['username']); ?> ***</h2>
                        <h1 id="head">Patient Treated Doctor :</h1>
                        <h2 id="head2">*** <?php echo ucfirst($row1['patient_treated_dr']); ?> ***</h2>
                            
                        <h1 id="head">Patient Coming Date :</h1>
                        <h2 id=\"head2\">*** <?php echo $row1['patient_come_date']; ?> ***</h2>                       
                    </div>
                    <div class="col-md-7" style="background-color: #fff; color: #515B67; border-radius: 30px;">
                         <?php    
                            $x = $row1['patient_treated_dr'];
                            
                            $q2 = "SELECT `dr_specialty`, `state` FROM `doctors` WHERE `dr_name` = '$x'";
                            $sql2 = @mysqli_query($conn, $q2);
                            if(!$sql2) echo "Try Agian! 2"; 
                            
                            $row2 = @mysqli_fetch_array($sql2, MYSQLI_ASSOC);
                        ?>
                        <h1>Patient Desies</h1>
                        <h2>*** <?php echo ucfirst($row2['dr_specialty']);?> ***</h2>
                        <h1>Treated Doctor State</h1>
                        <?php
                            echo "<h2>*** ";
                            echo $row2['state'] = 0 ? "Not Available " : " Available "; 
                            echo "***</h2>";
                        ?>
                        <h1>Patient Treatement</h1>
                        <?php 
                            echo "<h2>*** ".$row1['patient_disease_trate']." ***</h2>";
                        ?> 
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include '../inc/footer.php'; ?>
    <?php include '../inc/scripts.php'; ?>
</body>
</html>
