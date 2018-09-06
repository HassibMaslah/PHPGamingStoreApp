<?php
session_start();
if(isset($_POST['id']) && isset($_POST['pswd']))
{
    // connexion à la base de données
    $db_username = 'root';
    $db_password = '';
    $db_name     = 'jeux';
    $db_host     = 'localhost';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('could not connect to database');
    
    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $id = mysqli_real_escape_string($db,htmlspecialchars($_POST['id'])); 
    $pswd = mysqli_real_escape_string($db,htmlspecialchars($_POST['pswd']));
    if($id !== "" && $pswd!== "")
    {
        $requete = "SELECT count(*) FROM client WHERE 
              id= '".$id."' and Pswd= '".$pswd."' ";
        $exec_requete = mysqli_query($db,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        if($count!=0) // id d'utilisateur et mot de passe correctes
        {
           $_SESSION['id'] = $id;
           header('Location: LoginClient.php?id='.$_POST['id']);
        }
        else
        {
			
           header('Location: loginUser.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    }
    else
    {
       header('Location: loginUser.php?erreur=2'); // utilisateur ou mot de passe vide
    }
}
else
{
   header('Location: loginUser.php');
}
mysqli_close($db); // fermer la connexion
?>