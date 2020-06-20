<?PHP
include "../entities/categorie.php";
include "../core/categorieC.php";
include "../core/eventC.php";
$categorieeventC=new categorieeventC();
$evenementC=new evenementC();
//if (isset($_POST["libelleCategorieEvent"])){
	$categorieeventC-> supprimercategorie($_GET["libelleCategorieEvent"]);
	$evenementC->supprimereventcat($_GET["libelleCategorieEvent"]);
	header('Location: backcategories.php');
//}
?>
