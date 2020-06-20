
<?php
    session_start();
    include "../confiig.php";


    if (!isset($_SESSION['c'])){
        header('Location: backlogin1.php');
    }
    else {
       //echo 'cin  ' .$_SESSION['c'];
       // echo 'role  ' .$_SESSION['r'];*/
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
     <link rel="stylesheet" href="css/style.css"
     >

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
    
    <title>Shape Up / Home</title>
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

   
  </head>
<body>

        <div id="clockbox" style="color: black; font-weight: bold"></div>

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
  <div class="site-wrap">
  <header class="site-navbar" role="banner">
      <div class="site-navbar-top">
        <div class="container">
          <div class="row align-items-center">

            <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
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
                <span class="icon icon-person" style="color:#000000;"> <?php echo $nom." ".$prenom; ?> </span>
                <?php
                include "../entities/band.php";
                include "../core/bandC.php";
                $bandC=new bandC();
                $result=$bandC->recupererband($_SESSION['c']);
                foreach($result as $row){
                $tauxBand=$row['tauxBand'];
                $descriptionBand=$row['descriptionBand'];
                }
                if ($descriptionBand=="-") //bug
                {
                ?>
                <br>
                <span style="color:#a213ff;">Vous n'avez pas de band d'achats</span>
                <?php
                }
                else{
                //foreach($result as $row){
                //$tauxBand=$row['tauxBand'];
                //$descriptionBand=$row['descriptionBand'];
                //}
                ?>
                <br>
                <span style="color:#a213ff;"> <?php echo "vous avez un band d'achat de ".$tauxBand."DT: ".$descriptionBand; ?> </span>
                <?php
                }
                ?>
                <br>
                <span class="icon icon-door"><a href="../../login/views/logout.php">Se Déconnecter</a></span>
              <!--</form>-->
            </div>

            <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
              <div class="site-logo">
                <a href="home.php" class="js-logo-clone">Shape-Up</a>
              </div>
            </div>

            

          </div>
        </div>
      </div> 
      <nav class="site-navigation text-right text-md-center" role="navigation">
        <div class="container">
            <ul class="site-menu js-clone-nav d-none d-md-block">
              
            <li>
              <a href="home.php">Home</a>
              <ul> 
             </li>

              </ul>
            <li><a href="categories.php">Catégories</a></li>
            <li  class="active"><a href="frontcategorieevent.php">ÉVÈNEMENT</a><li>
            <li><a href="panier.php">Panier</a></li>
            <li><a href="frontreclamation.php">Reclamations</a></li>
            <li><a href="frontappreciation.php">Appreciations</a></li>
            <li><a href="shop.php">Promotions</a></li>

          </ul>
        </div>
      </nav>
    </header>
         <div class="site-section block-3 site-blocks-2 bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 site-section-heading text-center pt-4">

                 <div class="container mt-5" style="margin-left: 50;">
            <h2>Plus des Details sur les évènements</h2>
          </div></div></div></div></div></li></ul></div>
 
              

       
            <?php
        
                  include "../entities/event.php";
  include "../core/eventC.php";
  $evenement1C= new evenementC();
  $listeevenement=$evenement1C->recupererevent($_GET['idEvent']);
                  foreach($listeevenement as $row){
              ?>
   <div class="item">
                <div class="block-4 text-center">     
                  <figure class="block-4-image">
                    <!--<img src="images/produit.jpg">-->  <img src="images/cycl.jpg"alt="Image placeholder" class="img-fluid">
                  </figure>
                  <div class="block-4-text p-4">
                    <!--<h1><p class="text-primary font-weight-bold"><?PHP echo $row["libelleEvent"]; ?></p></h1>-->
                    <p class="text-primary font-weight-bold">Nombre de participants : <?PHP echo $row["nbParticipant"]; ?></p>
                   <p class="text-primary font-weight-bold">Adresse : <?PHP echo $row["adresseEvent"]; ?></p>
                          <!--  <p class="text-primary font-weight-bold">Date d'évènement : <?PHP echo $row["dateEvent"]; ?></p>-->
                      <p class="text-primary font-weight-bold">Description: <?PHP echo $row["descriptionEvent"]; ?></p>
                       
              
                    
<a href ="ajouterparticipation.php?idEvent=<?PHP echo $row["idEvent"]; ?> "class="btn btn-sm btn-primary"  onclick="myFunction()">Participer</a> 
                  </div>
                </div>
              </div>

               <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
   integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
   crossorigin=""/>
 <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
   integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
   crossorigin=""></script>
 




   <div id="snackbar">participation réusite</div>

<script type="text/javascript">
  function myFunction() {
  var x = document.getElementById("snackbar");
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}
</script>

        
   


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



</script>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>

<?PHP
                      include "../entities/promotion.php";
                      include "../core/promotionC.php";
                      $promotion1C= new promotionC();
                      $liste=$promotion1C->recupererproduitsenpromotion();
                      foreach($liste as $row){
                      //$code= $row["code"];
                      //echo "<option>$code</option>";
                      }
              ?>
    <footer class="site-footer border-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="row">
              <div class="col-md-12">
                 <h3 class="footer-heading mb-4">Navigations</h3>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="home.php">Home</a></li>
                  <li><a href="categories.php">Boutique</a></li>
                  <li><a href="frontcategorieevent.php">Evenements</a></li>
                  
                </ul>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="frontreclamation.php">Reclamations</a></li>
                  <li><a href="frontappreciation.php">Appreciations</a></li>
                  <li><a href="shop.php">Promotions</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="panier.php">Panier</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <h3 class="footer-heading mb-4">Promotion</h3>
            <a href="#" class="block-6">
              <img src="images/promotion.jpg" alt="Image placeholder" class="img-fluid rounded mb-4">
              <h3 class="font-weight-light  mb-0"><?PHP echo $row["descriptionPromotion"]?></h3>
              <p>Promotion de  <?PHP echo $row["datedepartPromotion"]?> &mdash; <?PHP echo $row["datefinPromotion"]?></p>
            </a>
           </div>
          <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4">Contactez Nous</h3>
              <ul class="list-unstyled">
                <li class="address">15 Rue des roses,chotrana III,Ariana</li>
                <li class="phone"><a href="#">+216 24 764 877 / +216 92 500 314</a></li>
                <li class="email">khaled.maammar@esprit.tn</li>

                <div id="map" style="height:250px; width:100%;"></div>
                <script type="text/javascript">
                  function initMap()
                  {
                    var location= {lat: 36.880891,lng: 10.213482};
                    var map = new google.maps.Map(document.getElementById("map"),{
                      zoom: 15,
                      center:location
                    });
                    var marker = new google.maps.Marker({
                      position:location,
                      map: map
                    });
                    //AIzaSyBgp02J8a6migVDssay3cvaD8C68UvDVP8
                  }
                </script>
                <script type="text/javascript" async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBgp02J8a6migVDssay3cvaD8C68UvDVP8&callback=initMap">
                  
                </script>
              </ul>
            </div>

            
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="#" target="_blank" class="text-primary">WebGeeks</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
          
        </div>
      </div>
    </footer>
  </div>

              <?php
              }
              ?>  

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
                   
            