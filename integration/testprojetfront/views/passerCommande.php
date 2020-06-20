<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Shoppers &mdash; Colorlib e-Commerce Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">
    <header class="site-navbar" role="banner">
      <div class="site-navbar-top">
        <div class="container">
          <div class="row align-items-center">

            <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
              <form action="" class="site-block-top-search">
                <span class="icon icon-search2"></span>
                <input type="text" class="form-control border-0" placeholder="Search">
              </form>
            </div>

            <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
              <div class="site-logo">
                <a href="index.html" class="js-logo-clone">ShapeUp</a>
              </div>
            </div>

            

          </div>
        </div>
      </div> 
      <nav class="site-navigation text-right text-md-center" role="navigation">
        <div class="container">
          <ul class="site-menu js-clone-nav d-none d-md-block">
            <li class="has-children">
              <a href="index.html">Home</a>
              <ul class="dropdown">
                <li><a href="#">Menu One</a></li>
                <li><a href="#">Menu Two</a></li>
                <li><a href="#">Menu Three</a></li>
                <li class="has-children">
                  <a href="#">Sub Menu</a>
                  <ul class="dropdown">
                    <li><a href="#">Menu One</a></li>
                    <li><a href="#">Menu Two</a></li>
                    <li><a href="#">Menu Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="has-children">
              <a href="about.html">About</a>
              <ul class="dropdown">
                <li><a href="#">Menu One</a></li>
                <li><a href="#">Menu Two</a></li>
                <li><a href="#">Menu Three</a></li>
              </ul>
            </li>
            <li class="active"><a href="shop.html">Shop</a></li>
            <li><a href="#">Catalogue</a></li>
            <li><a href="#">New Arrivals</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </div>
      </nav>
    </header>

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Passer Commander</strong></div>



              <div class="col-xl-6 col-lg-6 col-md-12">
              
               
               

           
              	 	 <form name="f" action="addcommande.php" class="tm-edit-product-form" method="POST" enctype='multipart/form-data'>
                   
              
                 <div class="form-group mb-3">
                    <label
                      for="name"
                      >Status Commande
                    </label>
                    <input
                      id="myInput" class="form-control validate" type="text" name="statusCommande" placeholder="En cours" value="Encours" required
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
               		 <div class="form-group mb-3">
                    <label
                      for="name"
                      >idProduit
                    </label>
                    
                     <select
                      class="custom-select tm-select-accounts"
                      name="idProduit" id="idProduit">
                  <?php
                    include "../config.php";
		
      
                    $res="select code from produit ";
                    $db = config::getConnexion();
                    $liste=$db->query($res);

                     foreach($liste as $row){
                    $option="<option>" . $row['code'];

                    echo $option ;
               }
                      ?>
                  </select>
                  </div>
              
              <div class="form-group mb-3">
                    <label
                      for="name"
                      >Cin
                    </label>
                    
                     <select
                      class="custom-select tm-select-accounts"
                      name="cinUtilisateur" id="id">
                  <?php
                    
                    $res="select cinUtilisateur from utilisateur ";
                   
                    $liste=$db->query($res);

                     foreach($liste as $row){
                    $option="<option>" . $row['cinUtilisateur'];

                    echo $option ;
               }
                      ?>

                  </select>

                  </div>
              
</div>
      
                 <div class="form-group mb-3">
              
          <button action=addcommande align="text-center" class="btn btn-success" id=button type="submit" name="submit" value="Passer une commande">  
          
Passer une commnde</button></div>
      














            
                  
                      
                  









</body></html>








































