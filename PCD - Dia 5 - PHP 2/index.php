<?php
  
    session_start();

    if(isset($_SESSION['auth'])) {
        if($_SESSION['auth']){
            header("location:../view/advertencias.php");
        } else {
            header("location:../view/login.php");
        }
    } else {
        header("location:../view/login.php");
    }

?>