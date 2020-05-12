<!--  ########################################################################################-->
<!--  ########################################################################################-->
<!--  ############################GESTION DE L'UTILISATEUR####################################-->
<!--  #############################CREATED AND DONE BY:#######################################-->
<!--  #################################KHALED MAAMMAR#########################################-->
<!--  ######################################2A6###############################################-->
<!--  ########################################################################################-->
<!--  ########################################################################################-->

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
<!--  A SMALL FUNCTION TO REMOVE DUPLICATE HEADER ERROR -->
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

  <body>
    <nav class="navbar navbar-expand-xl">
      <div class="container h-100">
        <a class="navbar-brand" href="index.html">
          <h1 class="tm-site-title mb-0">Product Admin</h1>
        </a>
        <button
          class="navbar-toggler ml-auto mr-0"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <i class="fas fa-bars tm-nav-icon"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto h-100">
            <li class="nav-item">
              <a class="nav-link" href="index.html">
                <i class="fas fa-tachometer-alt"></i> Dashboard
                <span class="sr-only">(current)</span>
              </a>
            </li>
                <!--   <li class="nav-item dropdown">

                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="far fa-file-alt"></i>
                                <span>
                                    Reports <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Daily Report</a>
                                <a class="dropdown-item" href="#">Weekly Report</a>
                                <a class="dropdown-item" href="#">Yearly Report</a>
                            </div>
                        </li>
                    -->
                    
                          <li class="nav-item">
                            <a class="nav-link" href="backevents.html">
                                <i class="fas fa-shopping-cart"></i>
                                Events
                            </a>
                        </li>

                           <li class="nav-item active">
                            <a class="nav-link" href="backlivreur.php">
                                <i class="fas fa-shipping-fast"></i>
                                Livreur
                            </a>
                        </li>

    					<li class="nav-item">
                            <a class="nav-link" href="backproducts.html">
                                <i class="fas fa-shopping-cart"></i>
                                Produits
                            </a>
                        </li>

                               <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-cog"></i>
                                <span>
                                    Promotions <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="backpromotions.html">Promotions</a>
                                <a class="dropdown-item" href="#">Band d'achats</a>
                            </div>

                       <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-cog"></i>
                                <span>
                                    Reclamations <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="backreclamations.html">Reclamations</a>
                                <a class="dropdown-item" href="#">Appreciations</a>
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
include "../entities/utilisateur.php";
include "../core/utilisateurC.php";
if (isset($_GET['cinUtilisateur'])){
	$utilisateurC=new utilisateurC();
    $result=$utilisateurC->recupererutilisateur($_GET['cinUtilisateur']);
	foreach($result as $row){
		$cinUtilisateur=$row['cinUtilisateur'];
		$nom=$row['nom'];
		$prenom=$row['prenom'];
    $password=$row['password'];
    $sexe=$row['sexe'];
    $role=$row['role'];
    $dateNaiss=$row['dateNaiss'];
    $adresse=$row['adresse'];
    $numTel=$row['numTel'];
    $email=$row['email'];
    $dateInscription=$row['dateInscription'];
?>
                   <form action="" class="tm-edit-product-form" method="POST">
                 <div class="form-group mb-3">
                    <label
                      for="name"
                      >CIN
                    </label>
                    <input
                      id="name"
                      name="cinUtilisateur"
                      type="number"
                      class="form-control validate"
                      value="<?PHP echo $cinUtilisateur ?>"
                      
                    />
                  </div>
                 <div class="form-group mb-3">
                    <label
                      for="name"
                      >Nom
                    </label>
                    <input
                      id="name"
                      name="nom"
                      type="text"
                      class="form-control validate"
                       value="<?PHP echo $nom ?>"
                     
                    />
                  </div>
                 <div class="form-group mb-3">
                    <label
                      for="name"
                      >Prenom
                    </label>
                    <input
                      id="name"
                      name="prenom"
                      type="text"
                      class="form-control validate"
                       value="<?PHP echo $prenom ?>"
                      
                    />
                  </div>
  
                   <div class="form-group mb-3">
                    <label
                      for="name"
                      >Mot de Passe
                    </label>
                    <input
                      id="name"
                      name="password"
                      type="password"
                      class="form-control validate"
                       value="<?PHP echo $password ?>"
                      readonly
                    />
                    
                  </div>
               
                   <div class="form-group mb-3">
                    <label
                      for="name"
                      >Sexe
                    </label>
                    <input
                      id="name"
                      name="sexe"
                      type="text"
                      class="form-control validate"
                       value="<?PHP echo $sexe ?>"
                      
                    />
                  </div>
           
                      <div class="form-group mb-3">
                   <label
                      for="name"
                      >Role
                    </label>
                    <input
                      id="name"
                      name="role"
                      type="number"
                      class="form-control validate"
                      value="<?PHP echo $role ?>"
                      
                    />
                  </div>
                   <div class="form-group mb-3">
                    <label
                      for="name"
                      >Date de Naissance
                    </label>
                    <input
                      id="name"
                      name="dateNaiss"
                      type="date"
                      class="form-control validate"
                      value="<?PHP echo $dateNaiss ?>"
                      
                    />
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="name"
                      >Adresse
                    </label>
                    <input
                      id="name"
                      name="adresse"
                      type="text"
                      class="form-control validate"
                      value="<?PHP echo $adresse ?>"
                      
                    />
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="name"
                      >Numero du telephone
                    </label>
                    <input
                      id="name"
                      name="numTel"
                      type="number"
                      class="form-control validate"
                      value="<?PHP echo $numTel ?>"
                      
                    />
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="name"
                      >E-mail
                    </label>
                    <input
                      id="name"
                      name="email"
                      type="text"
                      class="form-control validate"
                      value="<?PHP echo $email ?>"
                      
                    />

                  </div>
              
         
              <div class="col-12">
                 <button type="submit" name="modifier" class="btn btn-primary btn-block text-uppercase">Modifier le livreur</button>
              <!-- <input type="submit" name="modifier" value="modifier">-->
                <input type="hidden" name="cin_ini" value="<?PHP echo $_GET['cinUtilisateur'];?>">

              </div>
              <?PHP
  }
}
if (isset($_POST['modifier'])){
$utilisateur1=new utilisateur($_POST['cinUtilisateur'],$_POST['nom'],$_POST['prenom'],md5($_POST['password']),$_POST['sexe'],$_POST['role'],$_POST['dateNaiss'],$_POST['adresse'],$_POST['numTel'],$_POST['email'],NULL);
var_dump('cinUtilisateur');
//Partie2
/*
var_dump($livreur1);
}
*/
//Partie3
$utilisateur1C=new utilisateurC();
$utilisateur1C->modifierutilisateur($utilisateur1,$_POST['cin_ini']);
header('Location: backafficherutilisateur.php');
ob_enf_fluch();
}else{
  echo "vérifier les champs";
}
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
            Copyright &copy; <b>2018</b> All rights reserved. 
            
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