<?php

    session_start();
    if(isset($_SESSION['auth'])){
        if($_SESSION['auth']){  
            header("location:View/member.php");
        } else {
            header("location:View/login.php");
        }
    } else {
        header("location:View/login.php");
    }

?>