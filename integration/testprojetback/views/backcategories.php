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

<?PHP
include "../entities/categorie.php";
include "../core/categorieC.php";
$categorieevent1C=new categorieeventC();
$listecategorie=$categorieevent1C->affichercategories();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>


</body>
</html>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.btn {
  border: none;
  color: white;
  padding: 2px 10px;
  font-size: 2px;
  cursor: pointer;
}



.warning {background-color:   #B7B7B7;} /* Orange */
.warning:hover {background: ##FFFFFF;}


</style>
</head>
<body>






</body>
</html>


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
                            <a class="nav-link  " href="backindex.php">
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
                                    Categorie Evenements<i class="fas fa-angle-down"></i>
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
  
         <div class="container mt-5" >
 
          <div class="tm-bg-primary-dark tm-block tm-block-products" style="width:1020px; height: 150px">
            <div class="tm-product-table-container" >

             <table class="table table-hover tm-table-small tm-product-table">
                <thead>
                  <tr>
                       <th scope="col">&nbsp;</th>
                   
                     <th scope="col"> <font size="+1"><h4 style="color:orange;"><b>Id Catégorie</b></h4></font></th>
                   
                    <th scope="col">&nbsp;</th>
                    <th scope="col"><font size="+1"><h4 style="color:orange;"><b>Libelle Categorie</b></h4></font></th>
                        <th scope="col">&nbsp;</th>
                          
                    <th scope="col"> <font size="+1"><h4 style="color:orange;"><b>Description Categorie</b></h4></font> </th>
                     <th scope="col">&nbsp;</th>   <th scope="col">&nbsp;</th>   <th scope="col">&nbsp;</th>   <th scope="col">&nbsp;</th>   <th scope="col">&nbsp;</th>   <th scope="col">&nbsp;</th>   <th scope="col">&nbsp;</th>   <th scope="col">&nbsp;</th>
                    <th scope="col">&nbsp;</th>
                       <th scope="col">&nbsp;</th>
                          <th scope="col">&nbsp;</th>
                  </tr>
                </thead>
                <tbody>
                   <table border="3">
                    <div class="container mt-5">
      <div class="row tm-content-row" >
        <!--<div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 tm-block-col">
          <!--<div class="tm-bg-primary-dark tm-block tm-block-products">
            <div class="tm-product-table-container">-->
              <table class="table table-hover tm-table-small tm-product-table">
                <thead>
                
     <?PHP
   
    foreach($listecategorie as $row){
        ?>  
       
        <tr><td> <td><td><td><h4><?php echo $row['idCategorieEvent'];?></h4></td></td></td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
            <td><td><td><h4><?PHP echo $row['libelleCategorieEvent']; ?></h4></td></td></td>
            <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
            <td><td><td><h4><?PHP echo $row['descriptionCategorieEvent']; ?></h4></td></td></td>
            <td></td>
            <td></td><td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        <td> <form method="POST" action="">
                    <a name="supprimer"class="tm-product-delete-link" href="backsupprimercategories.php?libelleCategorieEvent=<?PHP echo $row['libelleCategorieEvent']; ?>"  >
                        <i class="far fa-trash-alt tm-product-delete-icon" ></i></a>
                      </form>                  <!--  <input href="backsupprimerlivreur.php?cinLivreur=<?PHP//echo $row['cinLivreur']; ?>" type="hidden" value="<?PHP //echo $row['cinLivreur']; ?>" name="cinLivreur">-->
                

       
    <!-- <td><form method="POST"  action="backsupprimercategories.php?libelleCategorieEvent=<?PHP// echo $row['libelleCategorieEvent']; ?>">
                  <input type="submit" name="supprimer" class="btn warning" value="supprimer"  style="width:150px"></a>
                    <input type="hidden" value="<?PHP //echo $row['libelleCategorieEvent']; ?>" name="libelleCategorieEvent">
                </form>
            </td>-->
             <td><a style="font-size: 50px ;color: orange" class="fas fa-sliders-h" href="backmodifiercategorie.php?idCategorieEvent=<?PHP echo $row['idCategorieEvent']; ?>">
                    </a>
                </td><td>
                      	<form method="GET"> 
                      	
                    		<a href="pdfeya/PDF.php?idCategorieEvent=<?PHP echo $row["idCategorieEvent"]; ?>" class="tm-product-delete-link" style="color:#FFFFFF;">
                    		<i class="fas fa-file-pdf"></i>
                    		</a>
                    	<!--</form>-->
                    </td>
                   
        <?PHP
    }
    ?></div>
  </div>
                </tbody>
              </table>
            </div>
            <!-- table container -->
            <a
              href="backajoutcategoriesform.php"
              class="btn btn-primary btn-block text-uppercase mb-3">Ajouter une nouvelle categorie </a>
          
          </div>
        </div>
    

   <!-- <?PHP
/*    foreach($listeevenement as $row){
        ?>
        <tr>
            <td><?PHP echo $row['libelleEvent']; ?></td>
            <td><?PHP echo $row['descriptionEvent']; ?></td>
            <td><?PHP echo $row['nbParticipant']; ?></td>
            <td><?PHP echo $row['dateEvent']; ?></td>
            <td><?PHP echo $row['adresseEvent']; ?></td>
            <td><form method="POST" action="backsupprimerevent.php">
                    <input type="submit" name="supprimer" value="supprimer">
                    <input type="hidden" value="<?PHP echo $row['libelleEvent']; ?>" name="libelleEvent">
                </form>
            </td>
          <!--  <td><a href="backmodifierevent.php?libelleEvent=<?PHP echo $row['libelleEvent']; ?>">
                    Modifier</a></td>
        </tr>-->
       <td><a href="backmodifierevent.php?libelleEvent=<?PHP echo $row['libelleEvent']; ?>">
                    Modifier</a></td>
*/       
    
    ?>

                </tbody>
              </table>
            </div>
            <!-- table container -->
           
      <!--<div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-product-categories">
            <h2 class="tm-block-title">Product Categories</h2>
            <div class="tm-product-table-container">
              <table class="table tm-table-small tm-product-table">
                <tbody>
                  <tr>
                    <td class="tm-product-name">Product Category 1</td>
                    <td class="text-center">
                      <a href="#" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td class="tm-product-name">Product Category 2</td>
                    <td class="text-center">
                      <a href="#" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td class="tm-product-name">Product Category 3</td>
                    <td class="text-center">
                      <a href="#" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td class="tm-product-name">Product Category 4</td>
                    <td class="text-center">
                      <a href="#" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td class="tm-product-name">Product Category 5</td>
                    <td class="text-center">
                      <a href="#" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td class="tm-product-name">Product Category 6</td>
                    <td class="text-center">
                      <a href="#" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td class="tm-product-name">Product Category 7</td>
                    <td class="text-center">
                      <a href="#" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td class="tm-product-name">Product Category 8</td>
                    <td class="text-center">
                      <a href="#" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td class="tm-product-name">Product Category 9</td>
                    <td class="text-center">
                      <a href="#" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td class="tm-product-name">Product Category 10</td>
                    <td class="text-center">
                      <a href="#" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td class="tm-product-name">Product Category 11</td>
                    <td class="text-center">
                      <a href="#" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>-->
            <!-- table container -->
            <!--<button class="btn btn-primary btn-block text-uppercase mb-3">
              Add new category
            </button>-->
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>

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



</script>
<br>
<br>
<br>

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