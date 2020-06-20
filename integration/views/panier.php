<?php   
session_start();
include "../Entities/cart.php";
include "../Core/cartC.php";


if (isset($_POST["cin"])) {
$cart1=new cart($_POST["cin"],$_POST["code"],$_POST["quantite"]);
$cart1C=new cartC();
$cart1C->ajoutercart($cart1);
$listecart=$cart1C->affichercarts($_POST["cin"]);
$cartcount = $cart1C->countcart($_POST["cin"]);
$totalprix = 0;
}
else{
$cart1C=new cartC();
$cartcount = 0;
$cartcount = $cart1C->countcart($_SESSION["c"]);
$listecart=$cart1C->affichercarts($_SESSION["c"]);
$totalprix = 0;

}
     ?>

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

            <div class="col-6 col-md-4 order-3 order-md-3 text-right">
              <div class="site-top-icons">
                <ul>
                  <li><a href="login.php"><span class="icon icon-person"></span></a></li>
                  <li><a href="#"><span class="icon icon-heart-o"></span></a></li>
                  <li>
                    <a href="" class="site-cart">
                      <span class="icon icon-shopping_cart"></span>
                      <span class="count"><?php echo $cartcount; ?></span>
                    </a>
                  </li> 
                  <li class="d-inline-block d-md-none ml-md-0"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a></li>
                </ul>
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
                <li><a href="index.html">Menu One</a></li>
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
                <li><a href="">Menu One</a></li>
                <li><a href="#">Menu Two</a></li>
                <li><a href="#">Menu Three</a></li>
              </ul>
            </li>
            <li class="active"><a href="categories.php">Shop</a></li>
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
          <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Panier</strong></div>
        </div>
      </div>
    </div>


<div class="container text-center">
  <table class="table">
    <thead class="thead-dark">
        <th width="40%">Image</th>
        <th width="20%">Nom Produit</th>
         <th width="20%">Prix</th>
          <th width="20%">Quantite</th>
            <th width="30%">Action</th>

    </thead>

     <?php

                foreach ($listecart as $row) {
                ?>  
        <tr>
          <td><figure class="block-4-image">
                                           <?php
          echo' <img src="data:images/jpeg;base64,'.base64_encode($row['img']).'" alt="" style="width:50px;height:50px;" />';
          ?>
                  </figure></td>
          <td><?php echo $row['libelleP'];?></td>
          <td><?php echo $row['prix']; $totalprix = $totalprix + $row['prix'];?></td>
          <td><?php echo $row['quantite'];?></td>
          
          <td>
       
            <form method="POST" action="deletefromcart.php">
            <button type="submit" class="btn btn-danger">Supprimer</button> 
            <input type="hidden" name="idcart" value="<?PHP echo $row['idcart']; ?>">
            </form>

          </td>
          
        </tr>

          
               
 <?php } ?>
       <tr>
        <td></td>
        <td></td>
        <td colspan="1" align="right"><h3>Total :</h3></td>
        <td align="right"><h4><?php echo $totalprix; ?> DT</h4></td>
      </tr>
        
      <tr>
        <td></td>
        <td></td>
        <td>
          <?php if (isset($_POST["code"])){
            ?>
          <form action="addcommande.php" method="POST" enctype='multipart/form-data'>
          <input type="hidden" value="<?php echo $row['code'] ;?>" name="code">
          <input type="hidden" value="<?php echo $_SESSION['c'] ;?>"name="cin"> 
          <input type="hidden" value="<?php echo $row['prix']; ?>"name="prix">
          <input type="hidden" value="<?php echo $row['libelleP']; ?>"name="nomP">
        <button type="submit" class="btn btn-success">Valider commande</button></form></td>
        <td>
        
        <form method="POST" action="deleteallcart.php"><button type="submit" name="cin" value="<?php echo $_SESSION["c"] ?>" class="btn btn-danger">Annuler commande</button></form>

        </td>
      </tr>   
<?php }?>

  </table>
  
</div>




























</body></html>