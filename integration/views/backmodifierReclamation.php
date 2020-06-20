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

  <body>
    <nav class="navbar navbar-expand-xl">
      <div class="container h-100">
        <a class="navbar-brand" href="backindex.html">
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
              <a class="nav-link" href="backindex.html">
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

                          <li class="nav-item">
                            <a class="nav-link" href="backlivreur.html">
                                <i class="fas fa-shopping-cart"></i>
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
                                                                <i class="fas fa-list-alt"></i>
                                <span>
                                    Avis <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="backreclamations.php">Reclamations</a>
                                <a class="dropdown-item" href="backappreciations.php">Appreciations</a>
                            </div>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-cog"></i>
                                <span>
                                    Settings <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Profile</a>
                                <a class="dropdown-item" href="#">Billing</a>
                                <a class="dropdown-item" href="#">Customize</a>
                            </div>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" href="backaccounts.html">
                                <i class="far fa-user"></i>
                                Comptes
                            </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link d-block" href="../front/logout.php">
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
                <h2 class="tm-block-title d-inline-block">Edit Reclamation</h2>
              </div>
            </div>

<!-- ************** debut ******************* -->


<?PHP
include_once "../entities/reclamation.php";
include_once "../core/reclamationC.php";
if (isset($_GET['idReclamation'])){
	$reclamationC=new reclamationC();
    $result=$reclamationC->recupererReclamation($_GET['idReclamation']);
	foreach($result as $row){
		$idReclamation=$row['idReclamation'];
		$typeReclamation=$row['typeReclamation'];
		$texteReclamation=$row['texteReclamation'];
		$etat=$row['etat'];
		$texteReponse=$row['texteReponse'];
		$cinUtilisateur=$row['cinUtilisateur'];

?>



            <div class="row tm-edit-product-row">
              <div class="col-xl-6 col-lg-6 col-md-12">
                <form action="" method="post" class="tm-edit-product-form">
                  <div class="form-group mb-3">
                    <label
                      for="name"
                      >Id de reclamation
                    </label>
                    <input
                      id="name"
                      name="idReclamation"
                      type="number"
                      required readonly
                      value="<?PHP echo $row['idReclamation']; ?>"
                      class="form-control validate"
                    />
                  </div>


                   <div class="form-group mb-3">
                    <label
                      for="name"
                      >Type de reclamation
                    </label>
                    <input
                      id="name"
                      name="typeReclamation"
                      type="text"
                      required readonly
                      value="<?PHP echo $row['typeReclamation']; ?>"
                      class="form-control validate"
                    />
                  </div>


                  <div class="form-group mb-3">
                    <label
                      for="name"
                      >Texte de reclamation
                    </label>
                    <input
                      id="name"
                      name="texteReclamation"
                      type="text"
                      required readonly
                      value="<?PHP echo $row['texteReclamation']; ?>"
                      class="form-control validate"
                    />
                  </div>


                  <div class="form-group mb-3">
                    <label
                      for="name"
                      >Etat
                    </label>
                    <select type="select" class="form-control validate" id="name" name="etat">
                    <option value="non traitee">non traitee</option>
                    <option value="traitee">traitee</option>
                    <option value="en cours">en cours</option>
                    </select>

                    <!--
                    <input
                      id="name"
                      name="etat"
                      type="text"
                      value="<?PHP //echo $row['etat']; ?>"
                      class="form-control validate"
                    />
                  -->

                  </div>


                  <div class="form-group mb-3">
                    <label
                      for="name"
                      >Reponse
                    </label>
                    <textarea
                      id="name"
                      name="texteReponse"
                      type="text"
                      class="form-control validate"
                    >
                  <?PHP echo $row['texteReponse']; ?>
                  </textarea>
                  </div>


                  <div class="form-group mb-3">
                    <label
                      for="name"
                      >Cin
                    </label>
                    <input
                      id="name"
                      name="cinUtilisateur"
                      type="number"
                      required readonly
                      value="<?PHP echo $row['cinUtilisateur']; ?>"
                      class="form-control validate"
                    />
                  </div>


              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block text-uppercase" name="modifier" value="modifier">Modifier la Reclamation</button>
              </div>

              <!-- -->
              <td><input type="hidden" name="idReclamation_ini" value="<?PHP echo $_GET['idReclamation'];?>"></td>
              <!-- -->


              <?PHP
	}
}
if (isset($_POST['modifier'])){
	$reclamation=new reclamation($_POST['idReclamation'],$_POST['typeReclamation'],$_POST['texteReclamation'],$_POST['etat'],$_POST['texteReponse'],$_POST['cinUtilisateur']);
	$reclamationC->modifierReclamation($reclamation,$_POST['idReclamation_ini']);
  include_once "mailing.php";
  mailouss($_POST['idReclamation']);	
  header('Location: backreclamations.php');

	//header('Location: backreclamations'];

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
            Copyright &copy; <b>2020</b> All rights reserved. 
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
