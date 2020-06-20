<?php  
include "../Core/commandeC.php";
$commandeC= new commandeC();
if (isset($_GET['idCommande'])){
$commandeC->AnnulerCommande($_GET['idCommande']);
  header('Location: BackCommande.php');


}else{
  echo "vérifier les champs";
}










?>