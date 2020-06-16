<?php
include "../Core/cartC.php";
$cartC=new cartC();
if (isset($_POST["idcart"])){
	$cartC->supprimercart($_POST["idcart"]);	

header('Location: panier.php');

}else{
	echo "vérifier les champs";
}
?>