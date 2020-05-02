<html>
<head>
<meta charset="utf8">
</head>
<body>
<?php 
include "../entities/utilisateur.php";
include "../core/utilisateurC.php";
include_once "../config.php";
//$log="admin";
//$pwd="admin";
/*$servername="localhost";
	$username="root";
	$password="";
	$dbname="dblogin";
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", 
	$username, $password);
	$req="select * from users where user_name='$login' && user_pass='$pwd'";
	$rep=$conn->query($req);
	$res=$rep->fetchAll();
	*/
$c=new config();
$conn=$c->getConnexion();
$user=new utilisateur($_POST['cinUtilisateur'],NULL,NULL,md5(md5($_POST['password'])),NULL,NULL,NULL,NULL,NULL,NULL,$conn);
$u=$user->Logedin($conn,$_POST['cinUtilisateur'],$_POST['password']);

	//var_dump($u);
//$logR=$_POST['login'];
//$pwdR=md5($_POST['password']);
$vide=false;

if (!empty($_POST['cinUtilisateur']) && !empty(md5($_POST['password']))) {
	
	foreach($u as $t){
		$vide=true;

	//	var_dump($t['password']);
	if ($t['cinUtilisateur']==$_POST['cinUtilisateur'] && $t['password']===md5(md5($_POST['password'])) && $t['role']==1){
		
		session_start();
		$_SESSION['l']=$t['cinUtilisateur'];
		$_SESSION['p']=$t['password'];
		$_SESSION['r']=$t['role'];
		header("location:backindex.html");
		var_dump($t['role']);
		}else if ($t['cinUtilisateur']==$_POST['cinUtilisateur'] && $t['password']===md5(md5($_POST['password'])) && $t['role']==0){


			session_start();
		$_SESSION['l']=$t['cinUtilisateur'];
		$_SESSION['p']=$t['password'];
		$_SESSION['r']=$t['role'];
		header("location:backlivreur.php"); //change it to front


	}else echo "password error";
	var_dump($t['role']);
}
if ($vide==false) { 

         // Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
         echo '<body onLoad="alert(\'Membre non reconnu...\')">'; 
         // puis on le redirige vers la page d'accueil
         echo '<meta http-equiv="refresh" content="0;URL=auth.html">'; 
      } 
}	  
 
else { 
      echo "Les variables du formulaire ne sont pas déclarées.<br> Vous devez remplir le formulaire"; 
     ?> <a href="auth.html">Retour au formulaire</a>	 <?php 
}  

?> 
</body>
</html>