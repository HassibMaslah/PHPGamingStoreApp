<?php 
$usr='root';
$passwd='';
$dns='mysql:host=localhost;dbname=jeux';
try{
$dbh=new PDO($dns,$usr,$passwd);
}
catch (PDOException $e){
 print "Erreur ! :" . $e->getMessage() . "<br/>";
 die();
}
?>