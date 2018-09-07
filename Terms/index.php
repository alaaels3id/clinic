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

    <title>Terms</title>
    <?php include '../inc/links.php'; ?>
    <style type="text/css">
        ol{padding : 50px; text-align: center;}
        ol li{ padding-top: 20px; color: #d12; font-weight: bold;}
    </style>
</head>
<body>
    <?php include '../inc/head.php'; ?>
	<?php include '../inc/header.php';?>
    <section>
        <div class="container">
            <div class="row" style="padding-top: 5px;">
                <div class="col-md-12" style="background-color: #ddd; color: #000; outline: 5px solid #fff;">
                    <ol class="text-center">
                        <li>This Website is designed for serve the patients only</li>
                        <li>This website is not swetable for childerns</li>
                        <li>This website is not responsable for any bad information that published on it</li>
                        <li>This Website is designed for serve the patients only</li>
                        <li>This website is not swetable for childerns</li>
                        <li>This website is not responsable for any bad information that published on it</li>
                        <li>This Website is designed for serve the patients only</li>
                        <li>This website is not swetable for childerns</li>
                        <li>This website is not responsable for any bad information that published on it</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <?php include '../inc/footer.php'; ?>
    <?php include '../inc/scripts.php'; ?>
</body>
</html>