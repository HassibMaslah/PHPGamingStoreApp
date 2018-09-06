<?php 

if(isset($_POST['upload'])){
$target="images\img".basename($_FILES['image']['name']);
$db=mysqli_connect("localhost","root","","jeux");
$image=$_FILES['image']['name'];
$text=$_POST['text'];
$nom=$_POST['nom'];
$console=$_POST['console'];
$prix=$_POST['prix'];
$poss=$_POST['poss'];
$nb=$_POST['nb'];
$sql="INSERT INTO jeux_video(nom,possesseur,console,prix,nbre_joueurs_max,images,commentaires) VALUES('$nom','$poss','$console','$prix','$nb','$image','$text')";	
mysqli_query($db, $sql);
	
}

?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Game Zone | Admin</title>

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
						<?php
								include_once('connexion.php');
								$cc=$dbh->prepare('SELECT * FROM admin WHERE id= ?');
								$cc->execute(array($_GET['id']));
								
								while($dd=$cc->fetch()){
								echo'<p name="LoginName"><img src="images/user2.png" alt="" class="logo">  '.$dd['id'].'<a href="AdminPage.php?deconnexion=true">Déconnexion</a></p>';}
								$dbh=NULL;
								
								 
						// tester si l'Admin est connecté 
						
							session_start();
							if(isset($_GET['deconnexion']))
							{ 
							   if($_GET['deconnexion']==true)
							   {  
								  session_unset();
								  header("location:loginAdmin.php");
							   }
							}
						?>
					</div> <!-- .right-section -->
				
				</div> <!-- .container -->
			</div> <!-- .site-header -->
			
<main class="main-content">
	<div class="container">
	<div class="page">
	<h2 class="section-title">Insert other games to the BD</h2>
				<form method="post" action="AdminPage.php" enctype="multipart/form-data">
						<input type="text" name="nom" placeholder="Name.."><br><br>
						<input type="text" name="poss" placeholder="Possesseur.."><br><br>
						<input type="text" name="console" placeholder="Console.."><br><br>
						<input type="text" name="prix" placeholder="Price.."><br><br>
						<input type="text" name="nb" placeholder="Number of players.."><br><br>
						<input type="file" name="image"><br><br>
						<textarea name="text" cols="40" rows="4" placeholder="Say somthing about this image..."></textarea><br><br>
						<input type="submit" value="Upload Image" name="upload">
					</form>
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