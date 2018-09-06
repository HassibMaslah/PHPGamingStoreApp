<?php 
session_start();
include_once('connexion.php');
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Game Zone | Account</title>

		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:400,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="fonts/lineo-icon/style.css" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>


	<body>
		
		<div id="site-content">
			<div class="site-header">
				<div class="container">
					<a href="index.php" id="branding">
						<img src="images/logo.png" alt="" class="logo">
						<div class="logo-text">
							<h1 class="site-title">Game Zone</h1>
							<small class="site-description">Buy your Game Here !</small>
						</div>
					</a> <!-- #branding -->
                    <div class="right-section pull-right" id="log">
						<a href="index.php"><p name="LoginName"> Go To <b>Game Zone</b> Store</p></a>
					</div> <!-- .right-section --> 

				
				</div> <!-- .container -->
			</div> <!-- .site-header -->
			
<main class="main-content">
	<div class="container">
	<div class="page">
	<h2 class="section-title">Login Admin</h2>
					<p>Do you confirm this Buy! </p><br><br>
					<?php if(isset($_GET['id'])){
								$id=$_GET['id']; 
								$prix=$_GET['prix'];
						echo'<a href="buy.php?id='.$id.'&prix='.$prix.'" class="button">Buy</a>
					<a href="index.php?id='.$id.'" class="button muted">No Thanks!</a>';
	
						}
					?>
					
	</div>
	</div>
		</main>
			<div class="site-footer">
				<div class="container">
					<div class="row">
					

					<div class="colophon">
						<div class="copy">Copyright 2018 Game zone. Designed by Hassib & Khairi. All rights reserved.</div>
				
					</div> <!-- .colophon -->
				</div> <!-- .container -->
			</div> <!-- .site-footer -->
		</div>


		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
		
	</body>

</html>