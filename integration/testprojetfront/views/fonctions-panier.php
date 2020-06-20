<?php 
function creationPanier(){
if(!isset($_SESSION['panier'])){
	$_SESSION['panier'] = array();
	$_SESSION['panier']['nomProduit'] = array();
	$_SESSION['panier']['quantite'] = array();
	$_SESSION['panier']['prix'] = array();
	$_SESSION['panier']['verrou'] = false;

}

return true ;

}
function isVerrouille(){
   if (isset($_SESSION['panier']) && $_SESSION['panier']['verrou'])
   return true;
   else
   return false;
}


function ajouterProduitauPanier($nomProduit,$quantite,$prix){

   //Si le panier existe
   if (creationPanier() && !isVerrouille())
   {
      //Si le produit existe déjà on ajoute seulement la quantité
      $positionProduit = array_search($nomProduit,  $_SESSION['panier']['nomProduit']);

      if ($positionProduit !== false)
      {
         $_SESSION['panier']['quantite'][$positionProduit] += $quantite ;
      }
      else
      {
         //Sinon on ajoute le produit
         array_push( $_SESSION['panier']['nomProduit'],$nomProduit);
         array_push( $_SESSION['panier']['quantite'],$quantite);
         array_push( $_SESSION['panier']['prix'],$prix);
      }
   }
   else
   echo "Un problème est survenu veuillez contacter l'administrateur du site.";

}
function supprimerArticle($nomProduit){
   //Si le panier existe
   if (creationPanier() && !isVerrouille())
   {
      //Nous allons passer par un panier temporaire
      $tmp=array();
      $tmp['nomProduit'] = array();
      $tmp['quantite'] = array();
      $tmp['prix'] = array();
      $tmp['verrou'] = $_SESSION['panier']['verrou'];

      for($i = 0; $i < count($_SESSION['panier']['nomProduit']); $i++)
      {
         if ($_SESSION['panier']['nomProduit'][$i] !== $nomProduit)
         {
            array_push( $tmp['nomProduit'],$_SESSION['panier']['nomProduit'][$i]);
            array_push( $tmp['quantite'],$_SESSION['panier']['quantite'][$i]);
            array_push( $tmp['prix'],$_SESSION['panier']['prix'][$i]);
         }

      }
      //On remplace le panier en session par notre panier temporaire à jour
      $_SESSION['panier'] =  $tmp;
      //On efface notre panier temporaire
      unset($tmp);
   }
   else
   echo "Un problème est survenu veuillez contacter l'administrateur du site.";
}
function compterArticles()
{
   if (isset($_SESSION['panier']))
   return count($_SESSION['panier']['nomProduit']);
   else
   return 0;

}
function supprimePanier(){
   unset($_SESSION['panier']);
}



 ?>
