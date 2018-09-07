<h1>All Doctors Page</h1>
<?php 
	if(@$_GET['action']){
		if(isset($_GET['action']) && $_GET['action'] == "delete"){
			try{
			
				include '../models/delete.php';
				$obj = new Delete("doctors");
				$delete = $obj->delete($_GET['id']);
				if($delete == TRUE){
					header('Location: http://localhost/clinic/admin/?page=ShowDoctors');
				}
			
			}catch(Exception $e){
				echo $e->getMessage();
			}
		}
		
		if(isset($_GET['action']) && $_GET['action'] == "update")
		{
			include 'views/UpdateDoctorsInfo.php';
			if(isset($_POST['submit']) && $_POST['submit'] == "Update"){
				$upadtedoctordata['dr_name'] 	    = $_POST['up_dr_name'];
				$upadtedoctordata['dr_specialty']   = $_POST['up_dr_specialty'];
				$upadtedoctordata['state']          = $_POST['up_state'];
				$upadtedoctordata['dr_patient_num'] = $_POST['up_dr_patient_num'];
				try {
					include '../models/update.php';
					$obj = new Update($upadtedoctordata, "doctors");
					$update = $obj->update($_GET['id']);
					if($update == TRUE){
						echo "<h1>You Have Upadated The Inforamtion</h1>";
					}
				} catch (Exception $e) {
					echo $e->getMessage();
				}
			}
		}
	}else include 'views/ShowDoctors.php';
?>