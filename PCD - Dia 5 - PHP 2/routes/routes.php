<?php

include '../model/Membro.class.php';

session_start();

if( isset( $_POST["loginAttempt"] ) ) {
    $login = $_POST["login"];
    $senha = $_POST["senha"];
    console.log($senha);
    $user = new Membro($login, $senha, null,  null,  null,  null);
    
    if($user->auth($login, $senha)){
        $_SESSION['auth'] = true;
        header("location:../view/advertencias.php");
    } else {
        header("location:../view/login.php");
    }
} 

if(isset($_POST['logoff'])){
    unset($_SESSION['auth']);
    unset($_POST['logoff']);
    session_destroy();
    header("location:../view/login.php");
} 

?>