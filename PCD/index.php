<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EcompJr</title>

    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">  
    <!--General CSS file  -->
    <link rel="stylesheet" href="css/style.css">
    <!--Header's CSS file  -->
    <link rel="stylesheet" href="css/header.css">
    <!--Modal's CSS file  -->
    <link rel="stylesheet" href="css/modal.css">
    <!-- Datepicker's CSS file -->
    <link href="css/datepicker.css" rel="stylesheet">
    <!--Footer's CSS file  -->
    <link rel="stylesheet" href="css/footer.css">

    <!--My JS script  -->
    <script src="js/script.js"></script>
    
</head>
<body>
    
    <?php
        include("header.html");
    ?>
   
    <main>    
        <section class="container">
            <div>
            <button class="filled" data-role="modalTrigger">
            Adicionar Advertência
            </div>
        </button>
        </section>
    </main>
    
    <?php
        include("footer.html");
    ?>
    
</body class="container">

    <?php
        include("modal.html");
    ?>


<script src="js/jquery-3.2.1.min.js"></script>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<!--Datepicker's JS file  -->
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/bootstrap-datepicker.pt-BR.min.js"></script>
</html>