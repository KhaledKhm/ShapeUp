
<?PHP

 include "../entities/categorie.php";
include "../core/categorieC.php";
include "phpmailer/mailing.php";
//if ( isset($_POST['libelleCategorieEvent']) and isset($_POST['descriptionCategorieEvent'])){
  $categorieevent1=new categorieevent($_POST['libelleCategorieEvent'],$_POST['descriptionCategorieEvent']);
$categorieevent1C=new categorieeventC();
$categorieevent1C->ajoutercategorie($categorieevent1);
//} else 
//{ echo"verifier les champs";}

//$categorieeventC=new categorieeventC;

//$email1=$categorieeventC->recuperermail();
//foreach($email1 as $row)
//{
//mailingP($_POST['libelleCategorieEvent'],$_POST['descriptionCategorieEvent'],$row["email"]);
//}
header('Location: backcategories.php');




?>