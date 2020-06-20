<?php
	//session_start();

	if (!isset($_SESSION['lang']))
		$_SESSION['lang'] = "bs";
	else if (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])) {
		if ($_GET['lang'] == "bs")
			$_SESSION['lang'] = "bs";
		else if ($_GET['lang'] == "fr")
			$_SESSION['lang'] = "fr";
			else if ($_GET['lang'] == "it")
			$_SESSION['lang'] = "it";
		else if ($_GET['lang'] == "es")
			$_SESSION['lang'] = "es";
		else if ($_GET['lang'] == "en")
			$_SESSION['lang'] = "en";
	}
		
		
	

require_once "languages/" . $_SESSION['lang'] . ".php";
	//require_once "bs.php";


?>