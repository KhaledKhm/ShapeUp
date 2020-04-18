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

                        <li class="nav-item">
                            <a class="nav-link" href="backpromotions.html">
                                <i class="fas fa-shopping-cart"></i>
                                Promotions
                            </a>
                        </li>

                        <li class="nav-item"> <!-- reclamation -->
                            <a class="nav-link" href="backreclamations.html">
                                <i class="far fa-user"></i>
                                Reclamations
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="backaccounts.html">
                                <i class="far fa-user"></i>
                                Comptes
                            </a>
                        </li>
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
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link d-block" href="backlogin.html">
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
include "../entities/livreur.php";
include "../core/livreurC.php";
if (isset($_GET['cinLivreur'])){
	$livreurC=new livreurC();
    $result=$livreurC->recupererlivreur($_GET['cinLivreur']);
	foreach($result as $row){
		$cinLivreur=$row['cinLivreur'];
		$nomLivreur=$row['nomLivreur'];
		$prenomLivreur=$row['prenomLivreur'];
?>
                   <form action="backlivreur.php" class="tm-edit-product-form" method="POST">
                  <div class="form-group mb-3">
                    <label
                      for="name"
                      >CIN Livreur
                    </label>
                    <input
                      id="name"
                      name="cinLivreur"
                      type="text"
                      class="form-control validate"
                      required
                      
                    />
                  </div>
               	 <div class="form-group mb-3">
                    <label
                      for="name"
                      >Nom
                    </label>
                    <input
                      id="name"
                      name="nomLivreur"
                      type="text"
                      class="form-control validate"
                      required
                     
                    />
                  </div>
                 <div class="form-group mb-3">
                    <label
                      for="name"
                      >Prenom
                    </label>
                    <input
                      id="name"
                      name="prenomLivreur"
                      type="text"
                      class="form-control validate"
                      required
                      
                    />
                  </div>
              
         
              <div class="col-12">
               <!-- <button type="submit" name="modifier" class="btn btn-primary btn-block text-uppercase">Modifier le livreur</button>-->
                <input type="submit" name="modifier" value="modifier">
                <input type="hidden" name="cin_ini" value="<?PHP echo $_GET['cinLivreur'];?>">
              </div>
            </form>
            <?PHP
	}
}
if (isset($_POST['modifier'])){
	$livreur=new livreur($_POST['cinLivreur'],$_POST['nomLivreur'],$_POST['prenomLivreur']);
	$livreurC->modifierlivreur($livreur,$_POST['cin_ini']);
	echo $_POST['cin_ini'];
	//header('Location: backlivreur.php');
}
?>
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
