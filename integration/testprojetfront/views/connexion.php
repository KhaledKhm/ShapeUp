<!--  ########################################################################################-->
<!--  ########################################################################################-->
<!--  #######################CODE TO CONFIRM SESSION CONNECTION###############################-->
<!--  #############################CREATED AND DONE BY:#######################################-->
<!--  #################################KHALED MAAMMAR#########################################-->
<!--  ######################################2A6###############################################-->
<!--  ########################################################################################-->
<!--  ########################################################################################-->

<html>
<head>
<meta charset="utf8">
</head>
<body>
<?php 
include_once "../entities/utilisateur.php";
include_once "../core/utilisateurC.php";
include_once "../config.php";

if(!isset($_POST['Valider'])){
$vide=false;
if (!empty($_POST['cinUtilisateur']) && !empty($_POST['password'])){
$cinUtilisateur=$_POST['cinUtilisateur'];
$password=$_POST['password'];


$utilisateur=new utilisateur($cinUtilisateur,NULL,NULL,$password,NULL,NULL,NULL,NULL,NULL,NULL);
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
                        header("location: home.php"); // to modify
                    if ($r == '0') // role client
                        header("location: home.php"); // to modify
                }
                else {
                    echo "WRONG PASSWORD";
                }
            }

            if ($vide == false) {
                echo '<body onload="alert(\'Membre non reconnu\')">';
                echo '<meta httpequiv="refresh" content="0;URL=backlogin1.php">';
            }
        }
    }
?> 
</body>
</html>