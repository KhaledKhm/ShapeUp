<?PHP
include "../core/livreurC.php";
//include "../core/livraisonC.php";
$livreur1C=new livreurC();
$listeLivreurs=$livreur1C->afficherlivreurs();
$livraison1C=new livraisonC();
$listeLivraison=$livraison1C->afficherlivraisons();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Product Page - Admin HTML Template</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"
    />
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="css/fontawesome.min.css" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
  </head>

  <body id="reportsPage">
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
    <div class="container mt-5">
      <div class="row tm-content-row">
        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-products">
            <div class="tm-product-table-container">
              <table class="table table-hover tm-table-small tm-product-table">
                <thead>
                  <tr>
                  
                    <th scope="col">ID Livraison</th>
                    <th scope="col">destination</th>
                    <th scope="col">cinClient</th>
                    <th scope="col">cinLivreur</th>
                    <th scope="col">idCommande</th>
                    <th scope="col">&nbsp;</th>
                     <th scope="col">&nbsp;</th>
                   <!-- <th scope="col">&nbsp;</th>-->
                  </tr>
                </thead>
                <tbody>
                    <?PHP
   foreach($listeLivraison as $row){
        ?>
        <tr>
            <td><?PHP echo $row['idLivraison']; ?></td>
            <td><?PHP echo $row['destination']; ?></td>
            <td><?PHP echo $row['cinClient']; ?></td>
            <td><?PHP echo $row['cinLivreur']; ?></td>
            <td><?PHP echo $row['idCommande']; ?></td>
            <td><form method="POST" action="">
                    <a  name="supprimer" class="tm-product-delete-link" href="backsupprimerlivraison.php?idLivraison=<?PHP echo $row['idLivraison']; ?>">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    <input href="backsupprimerlivreur.php?idLivraison=<?PHP echo $row['idLivraison']; ?>" type="hidden" value="<?PHP echo $row['idLivraison']; ?>" name="idLivraison">
                </form>
            </td>
            <td><a href="backmodifierlivraison.php?idLivraison=<?PHP echo $row['idLivraison']; ?>">
                    Modifier</a></td>
        </tr>
        <?PHP
    }
    ?>
               
                </tbody>
              </table>
            </div>
            <!-- table container -->
         <!--   <a
              href="backajoutlivreur.html"
              class="btn btn-primary btn-block text-uppercase mb-3">Modifier Livraison</a>
       <!--     <button class="btn btn-primary btn-block text-uppercase">
              Delete selected products
            </button>-->
          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-product-categories">
            <h2 class="tm-block-title">Product Categories</h2>
            <div class="tm-product-table-container">
              <table class="table table-hover tm-table-small tm-product-table">
                <thead>
                  <tr>
                  
                    <th scope="col">CIN Livreur</th>
                    <th scope="col">Nom Livreur</th>
                    <th scope="col">Prenom Livreur</th>
                    <th scope="col">&nbsp;</th>
                     <th scope="col">&nbsp;</th>
                   <!-- <th scope="col">&nbsp;</th>-->
                  </tr>
                </thead>
                <tbody>
                    <?PHP
   foreach($listeLivreurs as $row){
        ?>
        <tr>
            <td><?PHP echo $row['cinLivreur']; ?></td>
            <td><?PHP echo $row['nomLivreur']; ?></td>
            <td><?PHP echo $row['prenomLivreur']; ?></td>
            <td><form method="POST" action="">
                    <a  name="supprimer" class="tm-product-delete-link" href="backsupprimerlivreur.php?cinLivreur=<?PHP echo $row['cinLivreur']; ?>">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    <input href="backsupprimerlivreur.php?cinLivreur=<?PHP echo $row['cinLivreur']; ?>" type="hidden" value="<?PHP echo $row['cinLivreur']; ?>" name="cinLivreur">
                </form>
            </td>
            <td><a href="backmodifierlivreur.php?cinLivreur=<?PHP echo $row['cinLivreur']; ?>">
                    Modifier</a></td>
        </tr>
        <?PHP
    }
    ?>
               
                </tbody>
              </table>
            </div>
             <a
              href="backajoutlivreur.html"
              class="btn btn-primary btn-block text-uppercase mb-3">Ajouter Livreur</a>
            <!-- table container -->
           <!-- <button class="btn btn-primary btn-block text-uppercase mb-3">
              Modifier Livraison
            </button>-->
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
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script>
      $(function() {
        $(".tm-product-name").on("click", function() {
          window.location.href = "edit-product.html";
        });
      });
    </script>
  </body>
</html>