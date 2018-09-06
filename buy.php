<?php
session_start();
include_once('connexion.php');
$id=$_GET['id'];
$crd=$_GET['prix'];	

$cc=$dbh->prepare('SELECT * FROM payement WHERE id= ?');
$cc->execute(array($id));
$dd1=$cc->fetch();
$crdclient=$dd1['credit'];

$cc1=$dbh->prepare('SELECT * FROM jeux_video WHERE prix= ?');
$cc1->execute(array($crd));
$dd=$cc1->fetch();
$crdjeux=$dd['prix'];

$crdclient-=$crdjeux;
$cc2=$dbh->prepare('UPDATE payement SET credit= ? WHERE id= ?');
$cc2->execute(array($crdclient,$id));

header('Location: LoginClient.php?id='.$id);
?>