<?php
    include ("../controller/AdvertenciasController.class.php");

    $advController = new AdvertenciasController();

    var_dump($advController->getAdvertenciasDB());

?>