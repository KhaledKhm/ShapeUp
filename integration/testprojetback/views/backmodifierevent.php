<?php
    session_start();

    if (!isset($_SESSION['c'])){
        header('Location: backlogin.php');
    }
    else {
      /*  echo 'cin  ' .$_SESSION['c'];
        echo 'role  ' .$_SESSION['r'];*/
    }
?>

<?php 
ob_start();
 ?>
<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Edit Product - Dashboard Admin Template</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"
    />
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="css/fontawesome.min.css" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="jquery-ui-datepicker/jquery-ui.min.css" type="text/css" />
    <!-- http://api.jqueryui.com/datepicker/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
  </head>
<?php
    include "../entities/utilisateur.php";
    include "../core/utilisateurC.php";
    $utilisateurC=new utilisateurC();
    $result=$utilisateurC->recupererutilisateur($_SESSION['c']);
    foreach($result as $row){
       $nom=$row['nom'];
       $prenom=$row['prenom'];
    }
  ?>
  <body id="reportsPage">
    <nav class="navbar navbar-expand-xl">
      <div class="container h-100">
        <a class="navbar-brand" href="backindex.html">
          <h1 class="tm-site-title mb-0"><?php echo $nom." ".$prenom; ?></h1>
        </a>                <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars tm-nav-icon"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent"> <!--navigation bar, must be the same on all pages, starts from here -->
                    <ul class="navbar-nav mx-auto h-100">
                        <li class="nav-item">
                            <a class="nav-link" href="backindex.php">
                                <i class="fas fa-tachometer-alt"></i>
                                Dashboard
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>

                     <li class="nav-item">
                            <a class="nav-link" href="backcommande.php">
                                <i class="fas fa-shopping-cart"></i>
                                Commandes
                            </a>
                        </li>
                    
     <li class="nav-item dropdown active">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                 <i class="fas fa-ticket-alt"></i>
                                <span>
                                    Evenements<i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="backevents.php">Evenements</a>
                                <a class="dropdown-item" href="backcategories.php">Categorie Evenements</a>
                            </div>
                          <li class="nav-item">
                            <a class="nav-link" href="backlivreur.php">
                                <i class="fas fa-shipping-fast"></i>
                                Livreur
                            </a>
                        </li>

            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-shopping-cart"></i>
                                <span>
                                 Produits <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="backproduct.php">Produits</a>
                                <a class="dropdown-item" href="statistiqueprix.php">Statistique%P</a>
                                 <a class="dropdown-item" href="statistiquequantite.php">Statistique%Q</a>
                            </div>
                        </li>
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                 <i class="fas fa-ticket-alt"></i>
                                <span>
                                    Bands_d'achats <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="backbands.php">Bands d'achats</a>
                                <a class="dropdown-item" href="backpromotions.php">Promotions</a>
                            </div>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                                                <i class="fas fa-list-alt"></i>
                                <span>
                                    Avis <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="backreclamations.php">Reclamations</a>
                                <a class="dropdown-item" href="backappreciations.php">Appreciations</a>
                            </div>

                        <li class="nav-item">
                            <a class="nav-link" href="backafficherutilisateur.php">
                                <i class="far fa-user"></i>
                                Comptes
                            </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link d-block" href="logout.php">
                                Admin, <b>Logout</b>
                            </a>
                        </li>
                    </ul>
                </div>
            </div> <!--navigation bar ends here -->
    </nav>
    <div id="clockbox" style="color: white; font-weight: bold"></div>

<script type="text/javascript"> //horloge code
var tday=["Dimanche","Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi"];
var tmonth=["Janvier","Fevrier","Mars","Avril","Mai","Juin","Juillet","Aout","Septembre","Octobre","Novembre","Decembre"];

function GetClock(){
var d=new Date();
var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getFullYear();
var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds();
if(nmin<=9) nmin="0"+nmin;
if(nsec<=9) nsec="0"+nsec;

var clocktext=""+tday[nday]+", "+tmonth[nmonth]+" "+ndate+", "+nyear+" "+nhour+":"+nmin+":"+nsec+"";
document.getElementById('clockbox').innerHTML=clocktext;
}

GetClock();
setInterval(GetClock,1000);

//horloge code end
</script>

    <div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12">
                <h2 class="tm-block-title d-inline-block">Edit Product</h2>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-6 col-lg-6 col-md-12">
              	<?PHP

include_once "../entities/event.php";
include_once "../core/eventC.php";
if (isset($_GET['idEvent'])){
	$evenementC=new evenementC();
    $result=$evenementC->recupererevent($_GET['idEvent']);
	foreach($result as $row){
    $idEvent=$row['idEvent'];
		$libelleEvent=$row['libelleEvent'];
		$descriptionEvent=$row['descriptionEvent'];
		$nbParticipant=$row['nbParticipant'];
      $adresseEvent=$row['adresseEvent'];
        $dateEvent=$row['dateEvent'];
        $libelleCategorieEvent=$row['libelleCategorieEvent'];
        ?>


                   <form action="" class="tm-edit-product-form" method="POST">
                <div class="form-group mb-3">

                    <label
                      for="name"
                      >idEvent
                    </label>
                    <input
                      id="name"
                      name="idEvent"
                      type="text"
                      class="form-control validate"
                      readonly
                      value="<?php echo $idEvent?>"

                      required 
                   
                      
                    />
                  </div>
                   <div class="form-group mb-3">
                    <label
                      for="name"
                      >libelleEvent
                    </label>
                    <input
                      id="name"
                      name="libelleEvent"
                      type="text"
                      class="form-control validate"
                      required 
                      value="<?php  echo $libelleEvent ?>"
                    />
                  </div>
                 <div class="form-group mb-3">
                    <label
                      for="name"
                      >descriptionEvent
                    </label>
                    <input
                      id="name"
                      name="descriptionEvent"
                      type="text"
                      class="form-control validate"
                      required
                        value="<?php  echo $descriptionEvent ?>"
                     
                    />
                  </div>
                 <div class="form-group mb-3">
                    <label
                      for="name"
                      >nbParticipant
                    </label>
                    <input
                      id="name"
                      name="nbParticipant"
                      type="number"
                      class="form-control validate"
                      required
                        value="<?php  echo $nbParticipant ?>"
                    />
                  </div>
               <div class="form-group mb-3">
                    <label
                      for="name"
                      >adresseEvent
                    </label>
                    <input
                      id="name"
                      name="adresseEvent"
                      type="text"
                      class="form-control validate"
                      required
                        value="<?php  echo $adresseEvent ?>"
                      
                    />
                  </div>
                   <div class="form-group mb-3">
                    <label
                      for="name"
                      >dateEvent
                    </label>
                    <input
                      id="name"
                      name="dateEvent"
                      type="date"
                      class="form-control validate"
                      required
                        value="<?php  echo $dateEvent?>"
                      
                    />
                  </div>

<div class="form-group mb-3">
                    <label
                      for="name"
                      >libelleCategorieEvent
                    </label>
                    <input
                      id="name"
                      name="libelleCategorieEvent"
                      type="text"
                      class="form-control validate"
                      required
                      readonly
                        value="<?php  echo $libelleCategorieEvent?>"
                      
                    />
                  </div>
               <br>    
              <div class="col-12">
                 <button type="submit" name="modifier" class="btn btn-primary btn-block text-uppercase">Modifier l'evenement </button>
              <!-- <input type="submit" name="modifier" value="modifier">-->
       <input type="hidden" name="idEventini" id ="idEventini" value="<?PHP echo $_GET['idEvent'];?>">

              </div>
       <?PHP
  }
}
//var_dump($_POST['libelleEvent']);
if (isset ($_POST['modifier'])){
  $evenement=new evenement($_POST['libelleEvent'],$_POST['descriptionEvent'],$_POST['nbParticipant'],$_POST['adresseEvent'],$_POST['dateEvent'],$_POST['libelleCategorieEvent']);
 $evenementC->modifierevent($evenement,$_POST['idEventini']);
header('Location: backevents.php');
//;
}
////else {
 // echo "vérifier les champs";
//}




//else {
  //echo "vérifier les champs";
//}
?>


            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="tm-footer row tm-mt-small">
        <div class="col-12 font-weight-light">
          <p class="text-center text-white mb-0 px-4 small">
            Copyright &copy; <b>2020</b> All rights reserved. 
            
            Design: <a rel="nofollow noopener" href="https://templatemo.com" class="tm-footer-link">Template Mo</a>
        </p>
        </div>
    </footer> 

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="jquery-ui-datepicker/jquery-ui.min.js"></script>
    <!-- https://jqueryui.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script>
      $(function() {
        $("#expire_date").datepicker({
          defaultDate: "10/22/2020"
        });
      });
    </script>
  </body>
</html>