<?PHP
ob_start();

include "../entities/promotion.php";
include "../core/promotionC.php";
include "phpmailer/mailing.php";

if (isset($_POST['tauxPromotion']) and isset($_POST['descriptionPromotion']) and isset($_POST['idProduit']) and isset($_POST['datedepartPromotion']) and isset($_POST['datefinPromotion'])){
$promotion1=new promotion($_POST['tauxPromotion'],$_POST['descriptionPromotion'],$_POST['idProduit'],$_POST['datedepartPromotion'],$_POST['datefinPromotion']);
$promotion1C=new promotionC();
$promotion1C->ajouterpromotion($promotion1);
}else{
	echo "vérifier les champs";
}
$promotionC=new promotionC();
$produit=$promotionC->recupererfk2($_POST['idProduit']);
foreach($produit as $row){
	$libelle= $row["libelleP"];
}
$email=$promotionC->recuperermail();
foreach($email as $row)
{
	mailingP($_POST['tauxPromotion'],$_POST['descriptionPromotion'],$_POST['datedepartPromotion'],$_POST['datefinPromotion'],$libelle,$row["email"]);
}
header('Location: backpromotions.php');
ob_end_fluch();
?>