<?PHP
include "../entities/appreciation.php";
include "../core/appreciationC.php";

if (isset($_POST['idAppreciation']) and isset($_POST['texteAppreciation']) and isset($_POST['noteAppreciation']) and isset($_POST['cinUtilisateur'])){
$appreciation1=new appreciation($_POST['idAppreciation'],$_POST['texteAppreciation'],$_POST['noteAppreciation'],$_POST['cinUtilisateur']);
$appreciation1C=new appreciationC();
$appreciation1C->ajouterAppreciation($appreciation1);
header('Location: thankyouappreciation.php');
	
}else{
echo "vérifier les champs";
}

?>