<?php
	if($_POST){
		if(isset($_POST['submit']) && $_POST['submit'] == "login"){
			
			$admin['username'] = $_POST['adminname'];
			$admin['password'] = $_POST['adminpass'];
			
			$table    = 'admin';			
			$rname    = "adminname";
			$rpass    = "adminpass";
			try{
				include '../models/login.php';
				$login_model = new Login($admin, $rname, $rpass, $table);
				if($login_model == TRUE){
					session_start();
					$_SESSION['adminname'] = $admin['username'];
					header('Location: http://localhost/clinic/admin');
				}
			}catch (Exception $e){
				echo $e->getMessage();
			}
		}
	}else include '../views/admin.htm';
?>