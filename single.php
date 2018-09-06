<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Game Zone | Game</title>

		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:100,300,400,700|" rel="stylesheet" type="text/css">
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
					<?php 
					if(isset($_GET['id'])){
					echo'<a href="index.php?id='.$_GET['id'].'" id="branding">
						<img src="images/logo.png" alt="" class="logo">
						<div class="logo-text">
							<h1 class="site-title">Game Zone</h1>
							<small class="site-description">Buy your Game Here !</small>
						</div>
					</a> <!-- #branding -->
					 <div class="right-section pull-right">';
					}else{
						echo'<a href="index.php" id="branding">
						<img src="images/logo.png" alt="" class="logo">
						<div class="logo-text">
							<h1 class="site-title">Game Zone</h1>
							<small class="site-description">Buy your Game Here !</small>
						</div>
					</a> <!-- #branding -->
					 <div class="right-section pull-right">';
						 }
						
							if(isset($_GET['id'])){
								$id=$_GET['id'];
							echo'<a href="LoginClient.php?id='.$id.'"><img src="images/user2.png" alt="" class="logo">'.$id.'</a>';
								}
						?>
						
					</div> <!-- .right-section -->
					<div class="main-navigation">
						<button class="toggle-menu"><i class="fa fa-bars"></i></button>
				        <ul class="menu">
							<li class="menu-item home current-menu-item"><a href="index.php"><i class="icon-home"></i></a></li>
							<li class="menu-item"><a href="productsAndroid.php">Android</a></li>
							<li class="menu-item"><a href="productsIOS.php">IOS</a></li>
							<li class="menu-item"><a href="productsPC.php">PC</a></li>
							<li class="menu-item"><a href="productsPS.php">Playstation</a></li>
							<li class="menu-item"><a href="productsXbox.php">Xbox</a></li>
							<li class="menu-item"><a href="productsWii.php">Wii</a></li>
						</ul> <!-- .menu -->

						<div class="mobile-navigation"></div> <!-- .mobile-navigation -->
					</div> <!-- .main-navigation -->

					<div class="breadcrumbs">
						<div class="container">
						<?php 
							if(isset($_GET['id'])){
							echo'<a href="index.php?id='.$id.'">Home</a>';
							}else{
								echo'<a href="index.php">Home</a>';
							}
									include_once('connexion.php');
										
									if(isset($_GET['img'])){
										$img=$_GET['img'];
									$cc=$dbh->prepare('SELECT * FROM jeux_video WHERE images= ?');
									$cc->execute(array($_GET['img']));
									while($dd=$cc->fetch())
									{echo '<a href="">'.$dd['console'].'</a><span>'.$dd['nom'].'</span>';}
									}
									

								?>
							
							
						</div>
					</div>
				</div> <!-- .container -->
			</div> <!-- .site-header -->
			
			<main class="main-content">
				<div class="container">
					<div class="page">
						
						<div class="entry-content">
							<div class="row">
								<div class="col-sm-6 col-md-4">
									<div class="product-images">
										<figure class="large-image">
									<?php 
									include_once('connexion.php');
										
									if(isset($_GET['img'])){
										$img=$_GET['img'];
									$cc=$dbh->prepare('SELECT * FROM jeux_video WHERE images= ?');
									$cc->execute(array($_GET['img']));
									while($dd=$cc->fetch())
									{echo '<a href="dummy/image-1.jpg"><img src="images/img/'.$dd['images'].'" alt=""></a>';}
									}
									

								?>
											
										</figure>
									</div>
								</div>
								<div class="col-sm-6 col-md-8">
								<?php 
									include_once('connexion.php');
										
									if(isset($_GET['img'])){
										$img=$_GET['img'];
									$cc=$dbh->prepare('SELECT * FROM jeux_video WHERE images= ?');
									$cc->execute(array($img));
									while($dd=$cc->fetch())
									{echo '<h2 class="entry-title">'.$dd['nom'].'</h2> <smallclass="price"> Price: '.$dd['prix'].' DT</small><p>Comment:<br>'.$dd['commentaires'].'</p>';}
									}
									$dbh=NULL;

								?>
									
									
									
		
										<form action="LoginUser.php" >
										
											<input type="submit" value="Buy">
										</form>
									
								</div>
							</div>
						</div>
						
				
						
					</div>
				</div> <!-- .container -->
			</main> <!-- .main-content -->

			<div class="site-footer">
				<div class="container">
					<div class="row">
						
					<div class="colophon">
						<div class="copy">Copyright 2018 Game Zone. Designed by Hassib & Khairi. All rights reserved.</div>
						
					</div> <!-- .colophon -->
				</div> <!-- .container -->
			</div> <!-- .site-footer -->
		</div>

		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>