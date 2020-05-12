<!--  ########################################################################################-->
<!--  ########################################################################################-->
<!--  ############################GESTION DE L'UTILISATEUR####################################-->
<!--  #############################CREATED AND DONE BY:#######################################-->
<!--  #################################KHALED MAAMMAR#########################################-->
<!--  ######################################2A6###############################################-->
<!--  ########################################################################################-->
<!--  ########################################################################################-->

<?php 
 /*session_start(); 

  if (!isset($_SESSION['l'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: auth.html');
  }

  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['l']);
    header("location: auth.html");
  }*/

ob_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	 <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Inscription - Dashboard</title>
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
  <div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12">
                <h2 class="tm-block-title d-inline-block">Inscription</h2>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-6 col-lg-6 col-md-12">
                <form action="" class="tm-edit-product-form" method="POST">
                  <div class="form-group mb-3">
                    <label
                      for="name"
                      >CIN
                    </label>
                    <input
                      id="cinUtilisateur"
                      name="cinUtilisateur"
                      type="number"
                      class="form-control validate"
                      required
                      
                    />
                  </div>
               	 <div class="form-group mb-3">
                    <label
                      for="name"
                      >Nom
                    </label>
                    <input
                      id="nom"
                      name="nom"
                      type="text"
                      class="form-control validate"
                      required
                     
                    />
                  </div>
                 <div class="form-group mb-3">
                    <label
                      for="name"
                      >Prenom
                    </label>
                    <input
                      id="prenom"
                      name="prenom"
                      type="text"
                      class="form-control validate"
                      required
                      
                    />
                  </div>

                   <div class="form-group mb-3">
                    <label
                      for="name"
                      >Mot de Passe
                    </label>
                    <input
                      id="password"
                      name="password"
                      type="password"
                      class="form-control validate"
                      required
                      
                    />
                    
                  </div>
               
                   <div class="form-group mb-3">
                    <label
                      for="name"
                      >Sexe
                    </label>
                    <input
                      id="sexe"
                      name="sexe"
                      type="text"
                      class="form-control validate"
                      required
                      
                    />
                  </div>
                    
                <!--      <div class="form-group mb-3">
                  
                    <input
                      id="name"
                      name="role"
                      type="hidden"
                      class="form-control validate"
                      readonly
                      value="<?PHP// echo $rolen ?>"
                    />
                  </div>-->
                   <div class="form-group mb-3">
                    <label
                      for="name"
                      >Date de Naissance
                    </label>
                    <input
                      id="dateNaiss"
                      name="dateNaiss"
                      type="date"
                      class="form-control validate"
                      required
                      
                    />
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="name"
                      >Adresse
                    </label>
                    <input
                      id="adresse"
                      name="adresse"
                      type="text"
                      class="form-control validate"
                      required
                      
                    />
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="name"
                      >Numero du telephone
                    </label>
                    <input
                      id="numTel"
                      name="numTel"
                      type="number"
                      class="form-control validate"
                      required
                      
                    />
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="name"
                      >E-mail
                    </label>
                    <input
                      id="email"
                      name="email"
                      type="text"
                      class="form-control validate"
                      required
                      
                    />

                  </div>
              
              
         
              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block text-uppercase" name="inscrire" id="inscrire">Inscrire</button>
              </div>
              <?PHP
include "../entities/utilisateur.php";
include "../core/utilisateurC.php";


if (isset($_POST['inscrire'])){
  $cinUtilisateur=$_POST['cinUtilisateur'];
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $password=$_POST['password'];
    $sexe=$_POST['sexe'];
   // $role=$_POST['role'];
    $dateNaiss=$_POST['dateNaiss'];
    $adresse=$_POST['adresse'];
    $numTel=$_POST['numTel'];
    $email=$_POST['email'];
$utilisateur1=new utilisateur($cinUtilisateur,$nom,$prenom,md5($password),$sexe,$dateNaiss,$adresse,$numTel,$email);
$utilisateur1->setRole(0);
//var_dump('cinUtilisateur');
//Partie2
/*
var_dump($livreur1);
}
*/
//Partie3
$utilisateur1C=new utilisateurC();
$utilisateur1C->ajouterutilisateur($utilisateur1);
header('Location: backafficherutilisateur.php'); //change this later
  ob_enf_fluch();
}/*else{
  echo "vérifier les champs";
}
//*/

?>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
     <script type="text/javascript" >
      var sub=document.getElementById("inscrire");
      var cin=document.getElementById('cinUtilisateur');
      var nom=document.getElementById('nom');
      var prenom=document.getElementById('prenom');
      var password=document.getElementById('password');
      var sexe=document.getElementById("sexe");
      var dateNaiss=document.getElementById('dateNaiss');
      var adresse=document.getElementById('adresse');
      var numTel=document.getElementById('numTel');
      var email=document.getElementById('email');

if(sub){
    sub.addEventListener('click',function(e){
      if((cin.value.length==8)&&(numtel.value.length==8)){
      //  alert("works");
        //e.preventDefault();
        if ((nom.value.length!=0) && (prenom.value.length!=0) && (sexe.value.length!=0) && (adresse.value.length!=0) && (email.value.length!=0)){
             if((password.value.length>2)||(password.value.length<32)){

            }else{
              alert("Mot de passe doit avoir entre 3 et 32 lettres/nombres/symboles");
              e.preventDefault();
            }
         }else{
         alert("Il y a au moins un champs vide");
         e.preventDefault();
      }
      }else{
        alert("CIN et numtel contiennent 8 chiffres!");  
        e.preventDefault();
      }

      
  },false)}
</script>
</body>
</html>