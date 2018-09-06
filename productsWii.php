<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Game Zone | Wii</title>

		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:100,400,700|" rel="stylesheet" type="text/css">
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

					<div class="main-navigation">
						<button class="toggle-menu"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item"><a href="index.php"><i class="icon-home"></i></a></li>
							<li class="menu-item"><a href="productsAndroid.php">Android</a></li>
							<li class="menu-item"><a href="productsIOS.php">IOS</a></li>
							<li class="menu-item"><a href="productsPC.php">PC</a></li>
							<li class="menu-item"><a href="productsPS.php">Playstation</a></li>
							<li class="menu-item"><a href="productsXbox.php">Xbox</a></li>
							<li class="menu-item home current-menu-item"><a href="productsWii.php">Wii</a></li>
						</ul> <!-- .menu -->

						<div class="mobile-navigation"></div> <!-- .mobile-navigation -->
					</div> <!-- .main-navigation -->

					<div class="breadcrumbs">
						<div class="container">
							<a href="index.php">Home</a>
							<span>Wii</span>
						</div>
					</div>

				</div> <!-- .container -->
			</div> <!-- .site-header -->
			<main class="main-content">
				<div class="container">
						
						<div class="product-list">
							<?php $db=mysqli_connect("localhost","root","","jeux");
								$sql="SELECT * FROM jeux_video WHERE console='Wii'";
								$result=mysqli_query($db, $sql);
								while($dd=mysqli_fetch_array($result)){
	
								echo'<div class="product"> 
									<div class="inner-product">
										<div class="figure-image">
											<a href="single.php?img='.$dd['images'].'"><img src="images/img/'.$dd['images'].'" alt="Game '.$dd['ID'].'"></a>
										</div>
										<h3 class="product-title"><a href="single.php?img='.$dd['images'].'">'.$dd['nom'].'</a></h3>
										<h5 class="product-subtitle">'.$dd['console'].'</h5>
										<small class="price">'.$dd['prix'].' DT</small>
										<a href="LoginUser.php" class="button">Buy</a>
										<a href="LoginUser.php" class="button muted">Read Details</a>
									</div>
								</div> ';}
								$dbh=NULL;
							 ?>
								
						</div> <!-- .product-list -->
					</div>
				</div> <!-- .container -->
			</main> <!-- .main-content -->

			<div class="site-footer">
				<div class="container">
					<div class="row">

					<div class="colophon">
						<div class="copy">Copyright 2018 Game Zone. Designed by Hassib & Khairi. All rights reserved.</div>
						<div class="social-links square">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>
							<a href="#"><i class="fa fa-pinterest"></i></a>
						</div> <!-- .social-links -->
					</div> <!-- .colophon -->
				</div> <!-- .container -->
			</div> <!-- .site-footer -->
		</div>

		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>