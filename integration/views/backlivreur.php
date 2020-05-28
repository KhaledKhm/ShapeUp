<!--  ########################################################################################-->
<!--  ########################################################################################-->
<!--  ########################GESTION DE LIVRREUR ET LIVRAISON################################-->
<!--  #############################CREATED AND DONE BY:#######################################-->
<!--  #################################KHALED MAAMMAR#########################################-->
<!--  ######################################2A6###############################################-->
<!--  ########################################################################################-->
<!--  ########################################################################################-->

<?php //session
    session_start();

    if (!isset($_SESSION['c'])){
        header('Location: backlogin.php');
    }
    else {
      /*  echo 'cin  ' .$_SESSION['c'];
        echo 'role  ' .$_SESSION['r'];*/
    }
?>

<?PHP //allocation de livreur et livraison
include "../core/livreurC.php";
include "../core/livraisonC.php";
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
  <link href="css/toastr.css" rel="stylesheet"/>


    <meta name="robots" content="noindex, nofollow" />
    <meta
      name="viewport"
      content="initial-scale=1,maximum-scale=1,user-scalable=no"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans"
      rel="stylesheet"
    />
    <script src="https://api.tiles.mapbox.com/mapbox-gl-js/v1.10.1/mapbox-gl.js"></script>
    <link
      href="https://api.tiles.mapbox.com/mapbox-gl-js/v1.10.1/mapbox-gl.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
   integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
   crossorigin=""/>
 <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
   integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
   crossorigin=""></script>
     <style>
    #snackbar {
  visibility: hidden;
  min-width: 250px;
  margin-left: -125px;
  background-color: #333;
  color: #fff;
  text-align: center;
  border-radius: 2px;
  padding: 16px;
  position: fixed;
  z-index: 1;
  left: 50%;
  bottom: 30px;
  font-size: 17px;
}

#snackbar.show {
  visibility: visible;
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
  from {bottom: 0; opacity: 0;} 
  to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
  from {bottom: 30px; opacity: 1;} 
  to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}
      #map {
        position: absolute;
        top: 0;
        bottom: 0;
        width: 100%;
      }
      .marker {
        background-image: url('img/mapbox-icon.png');
        background-size: cover;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        cursor: pointer;
      }
      .mapboxgl-popup {
        max-width: 200px;
      }
      .mapboxgl-popup-content {
        text-align: center;
        font-family: 'Open Sans', sans-serif;
      }
    </style>

  </head>

  <body id="reportsPage">
    <nav class="navbar navbar-expand-xl">
      <div class="container h-100">
        <a class="navbar-brand" href="backindex.php">
          <h1 class="tm-site-title mb-0">Control panel</h1>
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
                    
                          <li class="nav-item">
                            <a class="nav-link" href="backcommande.php">
                                <i class="fas fa-shopping-cart"></i>
                                Commandes
                            </a>
                        </li>
                          <li class="nav-item">
                            <a class="nav-link" href="backevents.php">
                                <i class="fas fa-shopping-cart"></i>
                                Events
                            </a>
                        </li>

                          <li class="nav-item active">
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
      <div class="row tm-content-row">
       <div id="snackbar">Suppression reussite</div>
        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 tm-block-col" style="margin-left: -400px;"  >
          <div class="tm-bg-primary-dark tm-block tm-block-product-categories" style="width:720px; height: 120px">
            <h2 class="tm-block-title">Liste des Livreurs</h2><button onclick="myFunction()">test notif</button>
            <div class="tm-product-table-container"  >
              <table class="table table-hover tm-table-small tm-product-table" >
                <thead>
                  <tr>
                  
                    <th scope="col">CIN de Livreur</th>
                    <th scope="col">Nom de Livreur</th>
                    <th scope="col">Prenom de Livreur</th>
                    <th scope="col">Supprimer</th>
                     <th scope="col">Modifier</th>
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
                    <a  name="supprimer" class="tm-product-delete-link" href="backsupprimerlivreur.php?cinLivreur=<?PHP echo $row['cinLivreur']; ?>"  >
                        <i class="far fa-trash-alt tm-product-delete-icon" ></i>
                      </a>
                  <!--  <input href="backsupprimerlivreur.php?cinLivreur=<?PHP//echo $row['cinLivreur']; ?>" type="hidden" value="<?PHP //echo $row['cinLivreur']; ?>" name="cinLivreur">-->
                </form>
            </td>
            <td><a style="font-size: 20px ;color: white" class="fas fa-sliders-h" href="backmodifierlivreur.php?cinLivreur=<?PHP echo $row['cinLivreur']; ?>">
                    </a></td>
        </tr>
        <?PHP
    }
    ?>
               
                </tbody>
              </table>
            </div>
             <a
              href="backajoutlivreurform.php"
              class="btn btn-primary btn-block text-uppercase mb-3">Ajouter Livreur</a>
          </div>
        
    <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 tm-block-col" style="margin-left: 710px; margin-top: -650px"  >
          <div class="tm-bg-primary-dark tm-block tm-block-product-categories" style="width:720px; height: 120px">
            <h2 class="tm-block-title">Liste des Livreurs</h2>
            <div class="tm-product-table-container"  >
              <table class="table table-hover tm-table-small tm-product-table" >
                <thead>
                  <tr>
                  
                    <th scope="col">ID Livraison</th>
                    <th scope="col">Destination</th>
                    <th scope="col">CIN d'Utilisateur</th>
                    <th scope="col">CIN de Livreur</th>
                    <th scope="col">Nombre de Commande</th>
                    <th scope="col">Supprimer</th>
                    <th scope="col">Modifier</th>
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
            <td><?PHP echo $row['cinUtilisateur']; ?></td>
            <td><?PHP echo $row['cinLivreur']; ?></td>
            <td><?PHP echo $row['idCommande']; ?></td>

            <td><form method="POST" action="">
                    <a  name="supprimer" class="tm-product-delete-link" href="backsupprimerlivraison.php?idLivraison=<?PHP echo $row['idLivraison']; ?>">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                   <!-- <input href="backsupprimerlivreur.php?idLivraison=<?PHP// echo $row['idLivraison']; ?>" type="hidden" value="<?PHP //echo $row['idLivraison']; ?>" name="idLivraison">-->
                </form>
            </td>
            <td><a style="font-size: 20px ;color: white" class="fas fa-sliders-h" href="backmodifierlivraison.php?idLivraison=<?PHP echo $row['idLivraison']; ?>">
                    </a></td>
        </tr>
        <?PHP
    }
    ?>
               
                </tbody>
              </table>
            </div>
           </div></div>
    </div>   
    </div>

  <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 tm-block-col"    >
       
           <div class="tm-product-table-container" id='map' style="margin-left: 1050px; margin-top: -710px; height: 650px" ></div>
        </div>
      </div>
    </div>
  
<script type="text/javascript">
  function myFunction() {
  var x = document.getElementById("snackbar");
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}
</script>
    <script type="text/javascript">
     /* mapboxgl.accessToken = 'pk.eyJ1IjoiZXhhbXBsZXMiLCJhIjoiY2p0MG01MXRqMW45cjQzb2R6b2ptc3J4MSJ9.zA2W0IkI0c6KaAhJfk9bWg';

      var geojson = {
        'type': 'FeatureCollection',
        'features': [
          {
            'type': 'Feature',
            'geometry': {
              'type': 'Point',
              'coordinates': [10.235891,36.891482]
            },
            'properties': {
              'title': 'Mapbox',
              'description': '15 Rue des roses, Chotrana III, Ariana, Tunisie'
            }
          }
        ]
      };

      var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/light-v10',
        center: [8.8908642,33.2376713],
        zoom: 5
      });

      // add markers to map
      geojson.features.forEach(function(marker) {
        // create a HTML element for each feature
        var el = document.createElement('div');
        el.className = 'marker';

        // make a marker for each feature and add it to the map
        new mapboxgl.Marker(el)
          .setLngLat(marker.geometry.coordinates)
          .setPopup(
            new mapboxgl.Popup({ offset: 25 }) // add popups
              .setHTML(
                '<h3>' +
                  marker.properties.title +
                  '</h3><p>' +
                  marker.properties.description +
                  '</p>'
              )
          )
          .addTo(map);
      });*/
      var map = L.map('map').setView([36.880891, 10.213482], 10);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.marker([36.880891,10.213482]).addTo(map)
    .bindPopup('ShapeUp Warehouse.')
    .openPopup();
    </script>

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

  </body>
</html>