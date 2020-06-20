
<?php
    session_start();
    include "../confiig.php";


    if (!isset($_SESSION['c'])){
        header('Location: backlogin1.php');
    }
    else {
      /*  echo 'cin  ' .$_SESSION['c'];
        echo 'role  ' .$_SESSION['r'];*/
    }
?>




<!DOCTYPE html>
<html lang="en">
  <head>
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

    <link rel="stylesheet" href="css/style.css">
    
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
<!--Menu ends here-->
   <!-- <div class="site-blocks-cover" style="background-image: url(images/theme.jpg);" data-aos="fade">
      <div class="container">
        <div class="row align-items-start align-items-md-center justify-content-end">
          <div class="col-md-5 text-center text-md-left pt-5 pt-md-0">
            <h1 class="mb-2">Shape Up</h1>
            <div class="intro-text text-center text-md-left">
              <p class="mb-4">Sports Warehouse. 
             
              
              </p>
             
            </div>
          </div>
        </div>
      </div>
    </div>-->

<!--<a href="frontajoutevenement.php" class="btn btn-sm btn-primary" style="margin-left:+200px;">voir les évènements disponibles</a> 
<div> <a href="images/eya.jpg"><img src="images/eya.jpg" alt="Photo de la 1ére catégorie d'évènement" title="Cliquez pour agrandir"  width="150" height="300"  style="float:left;margin:50px 200px 50px 200px"; /></a> </div>   
 
 


<a href="frontajoutevenement.php" class="btn btn-sm btn-primary" style="margin-left: +100px;">voir les évènements disponibles</a> </div>
 <a href="images/eyaa.jpg"><img src="images/eyaa.jpg" alt="Photo de la 2éme catégorie d'évènement" title="Cliquez pour agrandir"  width="150" height="300"  style="float:right;margin:50px 200px 50px 20px"; /></a>




<a href="frontajoutevenement.php" class="btn btn-sm btn-primary" style="margin-left: +100px;">voir les évènements disponibles</a> 
  
  <div>  <a href="images/1.jpg"><img src="images/1.jpg" alt="Photo de la 3eme catégorie d'évènement" title="Cliquez pour agrandir"  width="150" height="300"  style="float:left;margin:50px 200px 50px 200px"; /></a></div>
  <a href="frontajoutevenement.php" class="btn btn-sm btn-primary" style="margin-left:+100px;">voir les évènements disponibles</a> 

    <div><a href="images/2.jpg"><img src="images/2.jpg" alt="Photo de la 4eme catégorie d'évènement" title="Cliquez pour agrandir"  width="150" height="300"  style="float:right;margin:50px 200px 50px 20px"; /></a></div>-->
<div class="bg-light py-3">
      <div class="container">
<div class="row mb-5">
 <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                <div class="block-4 text-center border">
                  <figure class="block-4-image">
                    <a href="shop-single.html"><img src="images/eya.jpg" alt="Image placeholder" class="img-fluid"></a>
                  </figure>
                  <a href="frontajoutevenement.php" class="btn btn-sm btn-primary">voir les évènements disponibles</a> 
  
                </div>
              </div>

              <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                <div class="block-4 text-center border">
                  <figure class="block-4-image">
                    <a href="shop-single.html"><img src="images/eyaa.jpg" alt="Image placeholder" class="img-fluid"></a>
                  </figure>
                  <a href="frontajoutevenement.php" class="btn btn-sm btn-primary" >voir les évènements disponibles</a> 
  
                </div>
              </div>

              <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                <div class="block-4 text-center border">
                  <figure class="block-4-image">
                    <a href="shop-single.html"><img src="images/1.jpg" alt="Image placeholder" class="img-fluid"></a>
                  </figure>
                  <a href="frontajoutevenement.php" class="btn btn-sm btn-primary" >voir les évènements disponibles</a> 
  
                </div>
              </div>

              <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                <div class="block-4 text-center border">
                  <figure class="block-4-image">
                    <a href="shop-single.html"><img src="images/2.jpg" alt="Image placeholder" class="img-fluid"></a>
                  </figure>
                  <a href="frontajoutevenement.php" class="btn btn-sm btn-primary">voir les évènements disponibles</a> 
  
                </div>
              </div>
</div>
</div>










<!--<tr></tr>
<td></td>
    <div class="site-section site-section-sm site-blocks-1">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
           
          </div>
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
            <div class="icon mr-4 align-self-start">
              <span class="icon-refresh2"></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase">Retour sans frais</h2>
              <p>Vous pouvez annuler la participation dans un évènement sans aucun frais.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
            <div class="icon mr-4 align-self-start">
              <span class="icon-help"></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase">Réclamation Gratuite</h2>
              <h2 class="text-uppercase"></h2>
              <p>Vous bénificiez de la liberté de passer une réclamation sur n'importe quel évènement si vous avez des problémes.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
-->
     
            
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

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>