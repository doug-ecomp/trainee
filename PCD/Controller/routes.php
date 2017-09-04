<?php

require_once("../Model/Membro.class.php");
session_start();

if(isset($_POST['loginAttempt'])){
    $login = $_POST['login'];
    $senha = $_POST['password'];
    unset($_POST['loginAttempt']);
    $member = new Membro($login, $senha);
    $user = $member->auth();
    if($user){
        $_SESSION['auth'] = true;
        $_SESSION['uid'] = $user['id'];
        header("location:../View/member.php");
    } else {
        header("location:../View/login.php?valid=false");
    }
}

if(isset($_POST['logoff'])){
    echo "AQUI****************************************";
    unset($_SESSION['auth']);
    unset($_POST['logoff']);
    session_destroy();
    // header("location:../View/login.php");
}



?>