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

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Add Product - Dashboard HTML Template</title>
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
 <script>  
 $(document).ready(function(){  
      $('#ajouter').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>
  </head>

  <body>

    <nav class="navbar navbar-expand-xl">
      <div class="container h-100">
        <a class="navbar-brand" href="backindex.php">
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
                            <a class="nav-link" href="BackCommande.php">
                                <i class="fas fa-shopping-cart"></i>
                                Commandes
                            </a>
                        </li>
                    
                        <li class="nav-item dropdown">
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

                          <li class="nav-item ">
                            <a class="nav-link" href="backlivreur.php">
                                <i class="fas fa-shipping-fast"></i>
                                Livreur
                            </a>
                        </li>

               <li class="nav-item dropdown active">
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

    <div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12">
                <h2 class="tm-block-title d-inline-block">Ajouter Un Nouveau Produit</h2>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-6 col-lg-6 col-md-12">
                <form name="f" action="addproduct.php" class="tm-edit-product-form" method="POST" enctype='multipart/form-data'>
                  <!--<div class="form-group mb-3">
                    <label
                      for="name"
                      >Code Produit
                    </label>
                    <input
                      id="name"
                      name="code"
                      type="number"
                      class="form-control validate"
                      required
                      
                    />
                  </div>-->
               	 <div class="form-group mb-3">
                    <label
                      for="name"
                      >Libelle Produit
                    </label>
                    <input
                      id="name"
                      name="libelleP"
                      type="text"
                      class="form-control validate"
                      required
                     
                    />
                  </div>
                    <div class="form-group mb-3">
                    <label
                      for="name"
                      >Quantite
                    </label>
                    <input
                      id="name"
                      name="quantite"
                      type="number"
                      class="form-control validate"
                      required
                      
                    />
                  </div>

                 <div class="form-group mb-3">
                    <label
                      for="name"
                      >Prix
                    </label>
                    <input
                      id="name"
                      name="prix"
                      type="number"
                      class="form-control validate"
                      required
                      
                    />
                  </div>
                  
               <div class="form-group mb-3">
                    <label
                      for="name"
                      >ID Catégorie
                    </label>
                    <!--<input
                      id="name"
                      name="id"
                      type="number"
                      class="form-control validate"
                      required
                      
                    />-->
                     <select
                      class="custom-select tm-select-accounts"
                      name="id" id="id"
                    >
                      <?php
        include "../config.php";
    $res="select id from categorieproduit ";
    $db = config::getConnexion();
        $liste=$db->query($res);

        foreach($liste as $row){
          $option="<option>" . $row['id'];

            echo $option ;
  }
    ?>
                    </select>
                    <!--<label for="name">ID:</label>

<select name="id" id="id">
    <option value="">--Select ID--</option>
    <option value="1" selected>9091</option>
    <option value="2">9092</option>
    <option value="3">9093</option>
   
</select>-->
                  </div>

                  <div class="form-group mb-3">
                    <label
                      for="name"
                      >Image
                    </label>
                    <input
                      id="name"
                      name="image"
                      type="file"
                      class="form-control validate"
                      required
                      
                    />
                  </div>

                   

         
              <div  class="col-12">
                <button action="addproduct.php" type="submit" class="btn btn-primary btn-block text-uppercase" onclick=" return verif()">Ajouter le Produit</button>
              </div>
            </form>
            </div>
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
    <script src="js/chayma.js"></script>
  
    <script>
      $(function() {
        $("#expire_date").datepicker();
      });
    </script>
  </body>
</html>