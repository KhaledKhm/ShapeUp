<?php
  class config {
    private static $instance = NULL;

    public static function getConnexion() {
    	 //self fonction/ variable static:self::$
        // public private ... ->
      if (!isset(self::$instance)) {
		try{
		//Php Data Object:relation avec objet et bd
        self::$instance = new PDO('mysql:host=localhost;dbname=shapeup', 'root', '');
        //pour afficher les erreurs
		self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}catch(Exception $e){
            die('Erreur: '.$e->getMessage());
		}
      }
      return self::$instance;
    }
  }
?>