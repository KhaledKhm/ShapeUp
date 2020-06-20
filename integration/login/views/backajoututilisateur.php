<!-- not workin
<?php 
ob_start();
 ?>
<!DOCTYPE html>
<html>
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
                      id="name"
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
                      id="name"
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
                      id="name"
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
                      id="name"
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
                      id="name"
                      name="sexe"
                      type="text"
                      class="form-control validate"
                      required
                      
                    />
                  </div>
<?PHP
$rolen=1; //pour l'ajout de role en front (pour avoir role client)
?>  
                      <div class="form-group mb-3">
                  
                    <input
                      id="name"
                      name="role"
                      type="hidden"
                      class="form-control validate"
                      readonly
                      value="<?PHP echo $rolen ?>"
                    />
                  </div>
                   <div class="form-group mb-3">
                    <label
                      for="name"
                      >Date de Naissance
                    </label>
                    <input
                      id="name"
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
                      id="name"
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
                      id="name"
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
                      id="name"
                      name="email"
                      type="text"
                      class="form-control validate"
                      required
                      
                    />

                  </div>
              
              
         
              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block text-uppercase" name="inscrire">Inscrire</button>
              </div>
              <?PHP
include "../entities/utilisateur.php";
include "../core/utilisateurC.php";


if (isset($_POST['inscrire'])){
$utilisateur1=new utilisateur($_POST['cinUtilisateur'],$_POST['nom'],$_POST['prenom'],$_POST['password'],$_POST['sexe'],$_POST['role'],$_POST['dateNaiss'],$_POST['adresse'],$_POST['numTel'],$_POST['email']);
var_dump('cinUtilisateur');
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
</body>
</html>