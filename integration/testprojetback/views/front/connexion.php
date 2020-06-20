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
if(!isset($_POST['Valider'])){
$vide=false;
if (!empty($_POST['cinUtilisateur']) && !empty($_POST['password'])){
$cinUtilisateur=$_POST['cinUtilisateur'];
$password=$_POST['password'];

//$c=new config();
//$conn=$c->getConnexion();

$utilisateur=new utilisateur($cinUtilisateur,NULL,NULL,$password,NULL,NULL,NULL,NULL,NULL,NULL);
//$u=$user->Logedin($conn,$_POST['cinUtilisateur'],$_POST['password']);

$utilisateurC=new utilisateurC();
$result=$utilisateurC->recupererutilisateur($_POST['cinUtilisateur']);

foreach($result as $row)
            {
                $c=$row['cinUtilisateur'];
                $p=$row['password'];
                $r=$row['role'];

                if ($c == $cinUtilisateur && $p == md5($password)) {
                    session_start();
                    $_SESSION['c'] = $cinUtilisateur;
                    $_SESSION['r'] = $r;

                    $vide = true;

                    if ($r == '1') // role admin
                        header("location: ../back/backindex.html"); // to modify
                    if ($r == '0') // role client
                        header("location: frontreclamation.php"); // to modify
                }
                else {
                    echo "WRONG PASSWORD";
                }
            }

            if ($vide == false) {
                echo '<body onload="alert(\'Membre non reconnu\')">';
                echo '<meta httpequiv="refresh" content="0;URL=login.html">';
            }
        }
    }

	//var_dump($u);
//$logR=$_POST['login'];
//$pwdR=md5($_POST['password']);
/*$vide=false;

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
		var_dump($t['role']);
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
*/
?> 
</body>
</html>