<?php
include "../Core/cartC.php";
$cartC=new cartC();
if (isset($_POST["cin"])){
	$cartC->supprimertouscart($_POST["cin"]);	

header('Location: panier.php');

}else{
	echo "vérifier les champs";
}
?>