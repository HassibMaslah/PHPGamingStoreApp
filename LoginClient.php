<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Game Zone | Store</title>

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
					<?php $id=$_GET['id'];
					echo'<a href="index.php?id='.$id.'" id="branding">';?>
						<img src="images/logo.png" alt="" class="logo">
						<div class="logo-text">
							<h1 class="site-title">Game Zone</h1>
							<small class="site-description">Buy your Game Here !</small>
						</div>
					</a> <!-- #branding -->
                    <div class="right-section pull-right" id="log">
							 <?php
								include_once('connexion.php');
								$id=$_GET['id'];
									$cc=$dbh->prepare('SELECT * FROM client WHERE id= ?');
									$cc->execute(array($id));
						
								while($dd=$cc->fetch()){
								echo'<p name="LoginName"><img src="images/user2.png" alt="" class="logo"> '.$dd['id'].'<a href="LoginClient.php?deconnexion=true">Déconnexion</a></p>';}
								//$dbh=NULL;
								
								
						//tester si l'utilisateur est connecté 
						
							
							if(isset($_GET['deconnexion']))
							{ 
							   if($_GET['deconnexion']==true)
							   {  
								  session_unset();
								  header("location:loginUser.php");
							   }
							}
						?>
					</div> <!-- .right-section -->   

				
				</div> <!-- .container -->
			</div> <!-- .site-header -->
			
<main class="main-content">
	<div class="container">
	<div class="page">
		<h1>Bonjour Mr <?php echo $id;?> </h1>
		<p>Voilà votre Panier</p>
		<table border="2">
			<tr><td>Solde</td><td><div class="inner-product"><?php include_once('connexion.php');
								    $id=$_GET['id'];
									$cc=$dbh->prepare('SELECT * FROM payement WHERE id= ?');
									$cc->execute(array($id));
								while($dd=$cc->fetch()){
								echo $dd['credit'];}
								$dbh=NULL;
				?></div></td></tr>
		</table>
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