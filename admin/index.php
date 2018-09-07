<?php
	session_start();
	$admin = @$_SESSION['adminname'];
	if(!isset($admin)){
		include '../inc/c_Admin.php'; 
		die();
	}
?>
<!DOCTYPE html>
<html lang="en" style="background-color:#ddd; color: #333;">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Page</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Theme CSS -->
    <style type="text/css">
		.admin-information{ background-color: #ddd; border-radius: 50px; margin-top: 20px;}

		div#control-board{ margin: 15px;}
		div#control-board > ul > li > span{ font-size: 15px; font-weight: bold; color: #d12; background-color: #000; padding: 15px; border-radius: 10px}
		div#control-board > ul > li > button{ font-size: 15px; width: 100px; font-weight: bold; }

		.sitecontrol{ font-weight: bold; padding: 20px; background-color: #fff; border-radius: 20px;}
		.sitecontrol .col-md-3 { border-radius: 10px; padding: 10px;}

		aside a{ display: block; padding-top: 10px; margin: 10px; text-decoration: none;}
		aside a:hover{ text-decoration: none;}

		.admin-aboutpage form{ padding: 10px;}
		.admin-aboutpage form input{ width: 350px; font-size: 18px;}
    </style>
    <!-- Custom Fonts -->
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body style="background-color:#ddd; color: #333;">
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-12 admin-information">
					<div id="control-board">
						<ul class="list-inline">
							<li>
								<?php if($admin) echo "<span>#Welcome_".ucfirst($admin)."</span>"; ?>
							</li>
							<li>
								<a class="btn btn-lg btn-danger" onclick="window.location.href='../inc/admin_logout.php'">
									<span class="glyphicon glyphicon-logout"></span>Logout
								</a>
							</li>
						</ul>
					</div>
					<div class="sitecontrol">
						<div class="row">
							<div class="col-md-3">
								<aside>
									<a class="btn-danger btn-lg" href="?page=AddNewPatient">New Patient Page</a>
									<a class="btn-danger btn-lg" href="?page=AddNewDr">New Dr Page</a>
									<a class="btn-danger btn-lg" href="?page=ShowDoctors">All Doctors</a>
									<a class="btn-danger btn-lg" href="?page=disease">Disease Page</a>
									<a class="btn-danger btn-lg" href="?page=ShowBook">Show Booking</a>
									<a class="btn-danger btn-lg" href="/clinic/">Go to Site</a>
								</aside>
							</div>
							<div id="page" class="col-md-9">
								<?php 
									if(@$_GET['page']){
										$page = "controllers/c_{$_GET['page']}.php";
										if(is_file($page)){
											include($page);
										}else{
											echo "<h1>Requested File is not Found!</h1>";
										}
									}else{
										include 'controllers/c_AddNewPatient.php';
									}
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<!-- jQuery -->
	<script src="/agency/js/jquery.js"></script>
	
	<!-- Bootstrap Core JavaScript -->
	<script src="/agency/js/bootstrap.min.js"></script>
</body>
</html>