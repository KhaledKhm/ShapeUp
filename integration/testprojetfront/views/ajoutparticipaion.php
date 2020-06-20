
<?php
    session_start();

    if (!isset($_SESSION['c'])){
        header('Location: backlogin1.php');
    }
    else {
      /*  echo 'cin  ' .$_SESSION['c'];
        echo 'role  ' .$_SESSION['r'];*/
    }
?>