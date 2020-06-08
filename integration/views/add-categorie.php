<?PHP
include "../../entities/categorie.php";
include "../../core/produitC.php";
 $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
//if (isset($_POST['id']) and isset($_POST['libel']) and isset($_POST['descc']) ){
$categorie1=new categorie($_POST['id'],$_POST['libelleC'],$_POST['descriptionC'],$file);
$categorie1C=new categorieC();
$categorie1C->ajouterCategorie($categorie1);
header('Location: backproduct.php');
	
//}else{
	//echo "vérifier les champs";
//}

?>