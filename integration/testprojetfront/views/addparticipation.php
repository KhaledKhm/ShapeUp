<?php 
include "../entities/participation.php";
include "../core/participationc.php";

$participation1=new participation($cin,$idEventx);
$participation1C= new participationc();
$participation1C->ajouterparticipation($participation1);

header('location: details.php'); 












?>