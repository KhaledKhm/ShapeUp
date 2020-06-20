<?php
    session_start();
    include "../confiig.php";


    if (!isset($_SESSION['c'])){
        header('Location: backlogin.php');
    }
    else {
    //    echo 'cin  ' .$_SESSION['c'];
    //    echo 'role  ' .$_SESSION['r'];
    }
?>
<?php 
ob_start();
include "../confiig.php";

 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Shape-Up &mdash; Reclamations</title>
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
    
<style type="text/css">
   
   *{
    margin: 0;
    padding: 0;
}
.rate {
    float: left;
    height: 46px;
    padding: 0 10px;
}
.rate:not(:checked) > input {
    position:absolute;
    top:-9999px;
}
.rate:not(:checked) > label {
    float:right;
    width:1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:30px;
    color:#ccc;
}
.rate:not(:checked) > label:before {
    content: '★ ';
}
.rate > input:checked ~ label {
    color: #ffc700;    
}
.rate:not(:checked) > label:hover,
.rate:not(:checked) > label:hover ~ label {
    color: #deb217;  
}
.rate > input:checked + label:hover,
.rate > input:checked + label:hover ~ label,
.rate > input:checked ~ label:hover,
.rate > input:checked ~ label:hover ~ label,
.rate > label:hover ~ input:checked ~ label {
    color: #c59b08;
}
 </style> 

  </head>
  <body>
  
  <div class="site-wrap">
  <header class="site-navbar" role="banner">
      <div class="site-navbar-top">
        <div class="container">
          <div class="row align-items-center">

            <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
            
                              <?php
                include_once "../entities/utilisateur.php";
                include_once "../core/utilisateurC.php";
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
            <li ><a href="frontcategorieevent.php">ÉVÈNEMENT</a><li>
            <li><a href="panier.php">Panier</a></li>
            <li><a href="frontreclamation.php">Reclamations</a></li>
            <li class="active"><a href="frontappreciation.php">Appreciations</a></li>
            <li><a href="shop.php">Promotions</a></li>

          </ul>
        </div>
      </nav>
    </header>
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="home.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Appréciations</strong></div>
        </div>
      </div>
    </div>  
<!-- ******************************************************************** -->

<?PHP
include "../entities/appreciation.php";
include "../core/appreciationC.php";
if (isset($_GET['idAppreciation'])){
  $appreciationC=new appreciationC();
    $result=$appreciationC->recupererAppreciation($_GET['idAppreciation']);
  foreach($result as $row){
    $idAppreciation=$row['idAppreciation'];
    $texteAppreciation=$row['texteAppreciation'];
    $noteAppreciation=$row['noteAppreciation'];
    $cinUtilisateur=$row['cinUtilisateur'];

?>


    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="h3 mb-3 text-black">Get In Touch</h2>
          </div>
          <div class="col-md-7">

            <form method="POST">
              
              <div class="p-3 p-lg-5 border">
                <div class="form-group row">
                  
                    <input type="number" class="form-control" id="c_fnametwo" name="idAppreciation" required readonly hidden value="<?PHP echo $idAppreciation ?>">

                  </div>


                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_message" class="text-black">Commentaire </label>
                    <textarea type="text" name="texteAppreciation" id="c_messagetwo" cols="30" rows="7" class="form-control">
                    <?PHP echo $row['texteAppreciation']; ?>
                    </textarea>
                  </div>
                </div>


                <div class="form-group row">
<div class="col-md-12">
<label for="c_message" class="text-black">Votre note sur le site</label>
<br>
<div class="rate">
    <input type="radio" id="star5" name="noteAppreciation" value="5" />
    <label for="star5" title="5">5 stars</label>
    <input type="radio" id="star4" name="noteAppreciation" value="4" />
    <label for="star4" title="4">4 stars</label>
    <input type="radio" id="star3" name="noteAppreciation" value="3" />
    <label for="star3" title="3">3 stars</label>
    <input type="radio" id="star2" name="noteAppreciation" value="2" />
    <label for="star2" title="2">2 stars</label>
    <input type="radio" id="star1" name="noteAppreciation" value="1" />
    <label for="star1" title="1">1 star</label>
  </div>                  
 </div>
</div>

<!--
                <div class="form-group row">
                  <div class="col-md-12">

                    <input type="number" class="form-control" id="c_emailtwo" name="noteAppreciation" value="<?PHP echo $noteAppreciation ?>">

                  </div>
                </div>
-->



                  <div class="col-md-6">
                    <label for="c_lname" class="text-black">Cin <span class="text-danger">*</span></label>
                    <input type="number" class="form-control" id="c_lnametwo" name="cinUtilisateur"  required readonly value="<?PHP echo $cinUtilisateur ?>">
                  </div>
                </div>


                <div class="form-group row">
                  <div class="col-lg-12">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" name="modifier" value="modifier">
                  </div>
                </div>

              <td><input type="hidden" name="idAppreciation_ini" value="<?PHP echo $_GET['idAppreciation'];?>"></td>

              </div>   
            </div>
          </form>
        </div>

<?PHP
	}
}
if (isset($_POST['modifier'])){
	$appreciation=new appreciation($_POST['idAppreciation'],$_POST['texteAppreciation'],$_POST['noteAppreciation'],$_POST['cinUtilisateur']);
	$appreciationC->modifierAppreciation($appreciation,$_POST['idAppreciation_ini']);
	
	header('Location: thankyouappreciationmodifiee.php');
}
?>

          </form>
        </div>
      </div>
        


          
          <div class="col-md-5 ml-auto">
            <div class="p-4 border mb-3">
              <span class="d-block text-primary h6 text-uppercase">Tunis</span>
              <p class="mb-0">203 Fake St. Mountain View, Tunis, Tunisia</p>
            </div>
            <div class="p-4 border mb-3">
              <span class="d-block text-primary h6 text-uppercase">Beja</span>
              <p class="mb-0">203 Fake St. Mountain View, Beja, Tunisia</p>
            </div>
            <div class="p-4 border mb-3">
              <span class="d-block text-primary h6 text-uppercase">Nabeul</span>
              <p class="mb-0">203 Fake St. Mountain View, Nabeul, Tunisia</p>
            </div>

          </div>
        </div>
      </div>
    </div>

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

  <script type="text/javascript" src="js/saisie1"></script>
    
  </body>
</html>