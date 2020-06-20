<?php
    session_start();

    if (!isset($_SESSION['c'])){
        header('Location: backlogin.php');
    }
    else {
    //    echo 'cin  ' .$_SESSION['c'];
    //    echo 'role  ' .$_SESSION['r'];
    }
?>
<?PHP
include "../core/produitC.php";
//include "../core/categorieC.php";
$produit1C=new produitC();
$listeProduits=$produit1C->afficherProduitsTrierQ();
$categorie1C=new categorieC();
$listeCategories=$categorie1C->afficherCategories();
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
    <div class="container mt-5">
      <div class="row tm-content-row">
   <div class="col-sm-19 col-md-19 col-lg-10 col-xl-10 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-product-categories">
            <h2 class="tm-block-title">Produits</h2>
            <div class="tm-product-table-container">
              <table class="table table-hover tm-table-small tm-product-table">
                <thead>
                   <?PHP
$produit1C=new ProduitC();


if(isset($_GET['chercher']))
{
 $listeProduits=$produit1C->rechercherProduits($_GET["search"]);
 
}


?>
<form method="GET"><input type="text" name="search" id="libelleP">
<input type="submit" name="chercher" value="chercher"></form>
                  <tr>
                  
                    <th scope="col">Code Produit</th>
                    <th scope="col">Libelle</th>
                    <th scope="col">Quantite</th>
                  <th scope="col"><td><form method="POST" action="tri.php"> <input type="submit" name="trier"value="Prix" >
                    </form>
                    </td></th>
                    <th scope="col">ID Categorie</th>
                    <th scope="col">Image</th>
                    <th scope="col">&nbsp;</th>
                    <th scope="col">&nbsp;</th>
                    <th scope="col">&nbsp;</th>
                  </tr>
                </thead>
                <tbody>
 <?PHP
    foreach($listeProduits as $row){
        ?>
        <tr>
            <td><?PHP echo $row['code']; ?></td>
            <td><?PHP echo $row['libelleP']; ?></td>
            <td><?PHP echo $row['quantite']; ?></td>
            <td><?PHP echo $row['prix']; ?></td>
            <td><?PHP echo $row['id']; ?></td>
            <td>  <?PHP        echo'  <img src="data:images/jpeg;base64,'.base64_encode($row['img'] ).'" alt="" style="width:150px;height:200px;" />';?>
</td>
            <td><form method="POST" action="delet-product.php">
                    <input type="submit"  name="supprimer"   value="supprimer" onclick="notifyMe()" >
                    <input type="hidden" value="<?PHP echo $row['code']; ?>" name="code">
                </form>
            </td>
            <form method="GET" >
            <td><a href="edit-product.php?code=<?PHP echo $row['code']; ?>">
                    Modifier</a></td>

                    </form>
        </tr>
        <?PHP
    }
    ?>
               
                </tbody>
              </table>
            </div>
            <a
              href="add-product.php"
              class="btn btn-primary btn-block text-uppercase mb-3">Ajouter Un Produit</a>
            <!-- table container -->
         <!--   <a
              href="backajoutlivreur.html"
              class="btn btn-primary btn-block text-uppercase mb-3">Modifier Livraison</a>
       <!--     <button class="btn btn-primary btn-block text-uppercase">
              Delete selected products
            </button>-->
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
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script>
      $(function() {
        $(".tm-product-name").on("click", function() {
          window.location.href = "edit-product.html";
        });
      });
    </script>
     <script type="text/javascript">
  function notifyMe() {
  if (!("Notification" in window)) {
    alert("This browser does not support system notifications");
  }
  else if (Notification.permission === "granted") {
    notify();
  }
  else if (Notification.permission !== 'denied') {
    Notification.requestPermission(function (permission) {
      if (permission === "granted") {
        notify();
      }
    });
  }
  
  function notify() {
    var notification = new Notification('oops', {
      icon: '../../notifier.png',
      body: "Hey! supression avec succés!",

    });

    notification.onclick = function () {
      window.location.replace("backproduct.php");      
    };
    setTimeout(notification.close.bind(notification), 5000); 
  }

}
</script>
  </body>
</html>