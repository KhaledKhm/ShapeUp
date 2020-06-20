<?php
ob_start()
?>

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
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Modifier une Promotion</title>
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
  <body>
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
        <?PHP
        include "../entities/promotion.php";
        include "../core/promotionC.php";
        if (isset($_GET['idPromotion'])){
        $promotionC=new promotionC();
        $result=$promotionC->recupererpromotion($_GET["idPromotion"]);
        foreach($result as $row){
        $idPromotion=$row['idPromotion'];
        $tauxPromotion=$row['tauxPromotion'];
        $descriptionPromotion=$row['descriptionPromotion'];
        $idProduit=$row['idProduit'];
        $datedepartPromotion=$row['datedepartPromotion'];
        $datefinPromotion=$row['datefinPromotion'];
        ?>
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

                         <li class="nav-item dropdown active">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-money-check-alt"></i>
                                <span>
                                    Promotions <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="backpromotions.php">Promotions</a>
                                <a class="dropdown-item" href="backbands.php">Band d'achats</a>
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
                            <a class="nav-link d-block" href="../../../login/views/logout.php">
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

    <div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12">
                <h2 class="tm-block-title d-inline-block">Modifier une Promotion</h2>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-6 col-lg-6 col-md-12">
                <form action="" class="tm-edit-product-form" method="POST">
                  <div class="form-group mb-3">
                    <label
                      for="idPromotion"
                      >idPromotion
                    </label>
                     <input
                      name="idPromotion"
                      id="idPromotion"
                      type="text"
                      class="form-control validate"
                      readonly
                      required
                      value="<?PHP echo $idPromotion ?>"
                    />
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="tauxPromotion"
                      >tauxPromotion</label
                    >
                    <input
                      id="tauxPromotion"
                      name="tauxPromotion"
                      type="number"
                      class="form-control validate"
                      required
                      value="<?PHP echo $tauxPromotion ?>"
                    />
                  </div> 
                  <div class="form-group mb-3">
                    <label
                      for="descriptionPromotion"
                      >DescriptionPromotion</label
                    >
                    <input
                      id="descriptionPromotion"
                      name="descriptionPromotion"
                      class="form-control validate"
                      type="text"
                      value="<?PHP echo $descriptionPromotion ?>"
                      required
                    ></input>
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="idProduit"
                      >idProduit</label
                    >
                    <input
                      id="idProduit"
                      name="idProduit"
                      type="number"
                      class="form-control validate"
                      required
                      readonly
                      value="<?PHP echo $idProduit ?>"
                    />
                  </div> 
                  <div class="row">
                      <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="datedepartPromotion"
                            >datedepartPromotion
                          </label>
                          <input
                            id="datedepartPromotion"
                            name="datedepartPromotion"
                            type="text"
                            class="form-control validate"
                            data-large-mode="true"
                            value="<?PHP echo $datedepartPromotion ?>"
                          />
                        </div>
                        <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="datefinPromotion"
                            >datefinPromotion
                          </label>
                          <input
                            id="datefinPromotion"
                            name="datefinPromotion"
                            type="text"
                            class="form-control validate"
                            value="<?PHP echo $datefinPromotion ?>"
                            required
                          />
                        </div>
                  </div>
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block text-uppercase" name="modifier" id="modifier">Modifier Promotion</button>
                <input type="hidden" name="idPromotion_ini" value="<?PHP echo $_GET['idPromotion'];?>">

              </div>
            </form>
            <?PHP
            }
            }
            if (isset($_POST['modifier'])){
            $promotion=new promotion($_POST['tauxPromotion'],$_POST['descriptionPromotion'],$_POST['idProduit'],$_POST['datedepartPromotion'],$_POST['datefinPromotion']);
            $promotionC->modifierpromotion($promotion,$_POST['idPromotion']);
            // echo $_POST['cin_ini'];
            header('Location: backpromotions.php');
            ob_end_fluch();
            }
            ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="tm-footer row tm-mt-small">
        <div class="col-12 font-weight-light">
          <p class="text-center text-white mb-0 px-4 small">
            Copyright &copy; <b>2018</b> All rights reserved. 
            
            Design: <a rel="nofollow noopener" href="https://templatemo.com" class="tm-footer-link">Web Geeks</a>
        </p>
        </div>
    </footer> 

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="jquery-ui-datepicker/jquery-ui.min.js"></script>
    <!-- https://jqueryui.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script>
      $(function() {
        $("#expire_date").datepicker();
      });
    </script>
  </body>
  <script type="text/javascript">
    var sub=document.getElementById("modifier");
    var tauxPromotion=document.getElementById("tauxPromotion");
    var datedepartPromotion=document.getElementById("datedepartPromotion");
    var datefinPromotion=document.getElementById("datefinPromotion");

  function isValidDate2(dateString)
  {
      var parts = dateString.split("/");
      var day = parseInt(parts[1], 10);
      var month = parseInt(parts[0], 10);
      var year = parseInt(parts[2], 10);

      var today = new Date();
      var today_x = today.getFullYear()*10000+(today.getMonth()+1)*100+today.getDate();
      var date_x = year*10000 + month*100 + day;
      return date_x > today_x;
  }

    // Validates that the input string is a valid date formatted as "mm/dd/yyyy"
  function isValidDate(dateString)
  {
      if(!/^\d{1,2}\/\d{1,2}\/\d{4}$/.test(dateString))
          return false;

      var parts = dateString.split("/");
      var day = parseInt(parts[1], 10);
      var month = parseInt(parts[0], 10);
      var year = parseInt(parts[2], 10);

      if(year < 1000 || year > 3000 || month == 0 || month > 12)
          return false;

      var monthLength = [ 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31 ];

      if(year % 400 == 0 || (year % 100 != 0 && year % 4 == 0))
          monthLength[1] = 29;

      return day > 0 && day <= monthLength[month - 1];
  };

  function ComparerDates(dateDepart,dateFin)
  {
    var parts = dateDepart.split("/");
      var dayD = parseInt(parts[1], 10);
      var monthD = parseInt(parts[0], 10);
      var yearD = parseInt(parts[2], 10);

      var parts = dateFin.split("/");
      var dayF = parseInt(parts[1], 10);
      var monthF = parseInt(parts[0], 10);
      var yearF = parseInt(parts[2], 10);

      var dateD=dayD+monthD*100+yearD*10000;
      var dateF=dayF+monthF*100+yearF*10000;

      if(dateD > dateF) return false;
      else return true;

  }


    sub.addEventListener('click',function(e){
      if(tauxPromotion.value < 100 && tauxPromotion.value > 0){
        if (isValidDate(datedepartPromotion.value) && isValidDate2(datedepartPromotion.value))
        {
          if(isValidDate(datefinPromotion.value) && isValidDate2(datefinPromotion.value))
          {
            if(ComparerDates(datedepartPromotion.value,datefinPromotion.value))
            {
              //jawek behi
            }else
            {
              alert("Vérifiez les dates");
              e.preventDefault();
            }
          }else
          {
            alert("Le champ datefinPromotion n'est pas valide");
            e.preventDefault();
          }
        } else
        {
          alert("Le champ datedepartPromotion n'est pas valide");
          e.preventDefault();
        }

      } else
      {
        alert("Le champ tauxPromotion doit etre comprise entre 1 et 100");
        e.preventDefault();
      }
    },false)

  </script>
</html>
