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
    <title>Back évènement</title>
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
                          <li class="nav-item">
                               <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-cog"></i>
                                <span>
                                   Event <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="backevents.php">Event</a>
                                <a class="dropdown-item" href="backcategories.html">catégories</a>
                            </div>
              <li class="nav-item">
                            <a class="nav-link" href="backproducts.html">
                                <i class="fas fa-shopping-cart"></i>
                                Produits
                            </a>
                        </li>

                           <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-money-check-alt"></i>
                                <span>
                                    Promotions <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item active" href="backpromotions.php">Promotions</a>
                                <a class="dropdown-item" href="backbands.php">Bands d'achats</a>
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
                            <a class="nav-link d-block" href="logout.php">
                                Admin, <b>Logout</b>
                            </a>
                        </li>
                    </ul>
                </div>
            </div> <!--navigation bar ends here -->
    </nav>
            <!-- table container -->
            
        </nav>
        <div class="container mt-5">
      <div class="row tm-content-row">
        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-products">
            <div class="tm-product-table-container">
              <table class="table table-hover tm-table-small tm-product-table">
                <thead>
                  <tr>
                   
                   <th scope="col">id Evenement</th>
                    <th scope="col">libelle évènement</th>
                    <th scope="col">description</th>
                    <th scope="col">nombre de participants </th>
                    <th scope="col">adresse evenement</th>
                       <th scope="col">date évènement</th>
                        <th scope="col">libelle Categorie Event</th>
                        <th scope="col">&nbsp;</th>
                    <th scope="col">&nbsp;</th>
                    <th scope="col">&nbsp;</th>
                     <th scope="col">&nbsp;</th>
                    
                   
                  </tr>
                </thead>
                <tbody>
                 <?PHP

                  include "../entities/event.php";
                  include "../core/eventC.php";
                  $evenement1C= new evenementC();
                  $listeevenement=$evenement1C->recupererliste();
                  foreach($listeevenement as $row){
                  ?>
                  <tr>
                    <td class="tm-product-name"><?PHP echo $row["idEvent"]; ?></td>
                    <td><?PHP echo $row['libelleEvent']; ?></td>
            <td><?PHP echo $row['descriptionEvent']; ?></td>
            <td><?PHP echo $row['nbParticipant']; ?></td>
            <td><?PHP echo $row['adresseEvent']; ?></td>
            <td><?PHP echo $row['dateEvent']; ?></td>
             <td><?PHP echo $row['libelleCategorieEvent']; ?></td>
                    <td>
                      <form method="GET">
                      <a href="backsupprimerevent.php?idEvent=<?PHP echo $row["idEvent"]; ?>" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                    
                         <td><a style="font-size: 50px ;color: orange" class="fas fa-sliders-h" href="backmodifierevent.php?idEvent=<?PHP echo $row['idEvent']; ?>">
                    </a>
                </td><td>
                      </form>
                    </td>
                    <td>
                      <form method="GET">
                        <a href="phpPDF/PDF.php?idEvent=<?PHP echo $row["idEvent"];?>&libelleEvent=<?PHP echo $row["libelleEvent"]; ?>&nbParticipant=<?PHP echo $row["nbParticipant"]; ?>&dateEvent=<?PHP echo $row["dateEvent"]; ?>&adresseEvent=<?PHP echo $row["adresseEvent"]; ?>&libelleCategorieEvent=<?PHP echo $row["libelleCategorieEvent"]; ?>" class="tm-product-delete-link" style="color:#FFFFFF;">
                        <i class="fas fa-file-pdf"></i>
                        </a>
                      </form>
                    </td>
                    <?PHP
                    }
                    ?>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- table container -->
            <a
              href="backajoute (1).php"
              class="btn btn-primary btn-block text-uppercase mb-3">Ajouter un evenement</a>
             
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