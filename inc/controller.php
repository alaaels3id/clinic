<?php
	if($_POST){
		if(isset($_POST['submit']) && $_POST['submit'] == "login"){
			
			$user['username'] = $_POST['username'];
			$user['password'] = $_POST['password'];
			
			$table    = 'users';
			$rname = "username";
			$rpass = "password";
			try{
				include '../models/login.php';
				$login_model = new Login($user, $rname, $rpass, $table);
				if($login_model == TRUE){
					session_start();
					$_SESSION['username'] = $user['username'];
					header('Location: http://localhost/clinic');
				}
			}catch (Exception $e){
				echo $e->getMessage();
			}
		}
	}else include 'views/login.htm';
?>