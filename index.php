<?php
	session_start();
	if(!isset($_SESSION['username'])){
		include 'inc/controller.php';
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
    <title>CLINIC System</title>
    <?php include 'inc/links.php'; ?>
    <style>
	    #myInput {
	    background-image: url('/css/searchicon.png'); /* Add a search icon to input */
	    background-position: 10px 12px; /* Position the search icon */
	    background-repeat: no-repeat; /* Do not repeat the icon image */
	    width: 100%; /* Full-width */
	    font-size: 16px; /* Increase font-size */
	    padding: 12px 20px 12px 40px; /* Add some padding */
	    border: 1px solid #ddd; /* Add a grey border */
	    margin-bottom: 12px; /* Add some space below the input */
		}

		#myTable {
		    border-collapse: collapse; /* Collapse borders */
		    width: 100%; /* Full-width */
		    border: 1px solid #ddd; /* Add a grey border */
		    font-size: 18px; /* Increase font-size */
		}

		#myTable th, #myTable td {
		    text-align: left; /* Left-align text */
		    padding: 12px; /* Add padding */
		}

		#myTable tr {
		    /* Add a bottom border to all table rows */
		    border-bottom: 1px solid #ddd; 
		}

		#myTable tr.header, #myTable tr:hover {
		    /* Add a grey background color to the table header and on hover */
		    background-color: #f1f1f1;
		}
    </style>
</head>
<body>
    <!-- Header -->
    <?php include 'inc/head.php'; ?>
	<?php include 'inc/header.php';?>
	<section>
		<h1 class="text-center">The Clinic Doctors</h1>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<input type="text" id="myInput" onkeyup="myFunction()" class="input-lg form-control" placeholder="Search For Doctor ....">
					<?php include 'php/doctors.php'; ?>
					<table id="myTable">
						<tr class="header">
                            <th>Doctor Name</th>
                            <th>Doctor Spicialty</th>
                            <th>Doctor Num Of Patients</th>
                            <th>Doctor State</th>
                        </tr>
                    	<?php while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)){ ?>
                    	<tr>
                    		<td><?php echo ucfirst($row['dr_name']); ?></td>
                    		<td><?php echo $row['dr_specialty']; ?></td>
                    	    <td><?php echo $row['dr_patient_num']; ?></td>
                       	<?php echo  $row['state'] == 1 ? "<td style=\"color: green;font-weight: bold;\">In Clinic</td>" : "<td style=\"color: red;font-weight: bold;\">Out Of Clinic</td>"; ?>	
                        </tr>
                       	<?php } ?>
                    </table>
				</div>
			</div>
		</div>
	</section>
	<section class="text-center">

	</section>
	<?php include 'inc/footer.php'; ?>

	<?php include 'inc/scripts.php'; ?>

	<script src="/clinic/js/searchForDoctor.js"></script>
</body>
</html>