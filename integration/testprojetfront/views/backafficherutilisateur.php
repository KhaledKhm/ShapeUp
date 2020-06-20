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
    //    echo 'cin  ' .$_SESSION['c'];
    //    echo 'role  ' .$_SESSION['r'];
    }
?>

<?PHP
include "../core/utilisateurC.php";
//include "../core/livraisonC.php";
$utilisateur1C=new utilisateurC();
$listeUtilisateur=$utilisateur1C->afficherutilisateurs();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Control panel - Admin</title>
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
        <a class="navbar-brand" href="backindex.php">
          <h1 class="tm-site-title mb-0">Admin Panel</h1>
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
              <a class="nav-link" href="backindex.php">
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
                            <a class="nav-link" href="backevents.php">
                                <i class="fas fa-shopping-cart"></i>
                                Events
                            </a>
                        </li>

                          <li class="nav-item">
                            <a class="nav-link" href="backlivreur.php">
                                <i class="fas fa-shipping-fast"></i>
                                Livreur
                            </a>
                        </li>

    					<li class="nav-item">
                            <a class="nav-link" href="backproducts.php">
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

                        <li class="nav-item active">
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
     <div id="clockbox" style="color: white; font-weight: bold"></div>

<script type="text/javascript">
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
    <div class="container mt-5" style="margin-left: 0;">
      <div class="row tl-content-row" >
        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 tm-block-col" > <h2 class="tm-block-title">Liste des Utilisateurs</h2>
            
          <div class="tm-bg-primary-dark tm-block tm-block-products" style="width:1880px;">
           <div class="tm-product-table-container" style="width:1800px;">
              <table class="table table-hover tm-table-large tm-product-table">
                <thead>
                  <tr>
                  
                    <th scope="col">CIN Utilisateur</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                  <!--  <th scope="col">Mot de passe</th>-->
                    <th scope="col">Sexe</th>
                    <th scope="col">Role</th>
                    <th scope="col">Date de naissance</th>
                    <th scope="col">Adresse</th>
                    <th scope="col">Num de telephone</th>
                    <th scope="col">E-Mail</th>
                    <th scope="col">Date d'inscription</th>
                    <th scope="col">Supprimer</th>
                    <th scope="col">Modifier</th>
                   <!-- <th scope="col">&nbsp;</th>-->
                  </tr>
                </thead>
                <tbody>
                    <?PHP
   foreach($listeUtilisateur as $row){
        ?>
        <tr>
            <td><?PHP echo $row['cinUtilisateur']; ?></td>
            <td><?PHP echo $row['nom']; ?></td>
            <td><?PHP echo $row['prenom']; ?></td>
         <!--   <td><?PHP// echo $row['password']; ?></td>-->
            <td><?PHP echo $row['sexe']; ?></td>
            <td><?PHP if (($row['role'])==0){
                        echo "Client";}
                        else {echo "Admin"; }
                           # code...
                          ?></td>
            <td><?PHP echo $row['dateNaiss']; ?></td>
            <td><?PHP echo $row['adresse']; ?></td>
            <td><?PHP echo $row['numTel']; ?></td>
            <td><?PHP echo $row['email']; ?></td>
            <td><?PHP echo $row['dateInscription']; ?></td>
            <td><form method="POST" action="">
                    <a  name="supprimer" class="tm-product-delete-link" href="backsupprimerutilisateur.php?cinUtilisateur=<?PHP echo $row['cinUtilisateur']; ?>">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    <input href="backsupprimerutilisateur.php?cinUtilisateur=<?PHP echo $row['cinUtilisateur']; ?>" type="hidden" value="<?PHP echo $row['cinUtilisateur']; ?>" name="cinUtilisateur">
                </form>
            </td>
            <td><a style="font-size: 20px ;color: white" class="fas fa-sliders-h" href="backmodifierutilisateur.php?cinUtilisateur=<?PHP echo $row['cinUtilisateur']; ?>">
                    </a></td>
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