<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EcompJr</title>

    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../Vendors/Css/bootstrap.min.css">
    
    <!-- Datepicker's CSS file -->
    <link rel="stylesheet" href="../Vendors/Css/datepicker.css">

    <!--General CSS file  -->
    <link rel="stylesheet" href="../Assets/Css/style.css">
    <!--Header's CSS file  -->
    <link rel="stylesheet" href="../Assets/Css/header.css">
    <!--Table's CSS file  -->
    <link rel="stylesheet" href="../Assets/Css/gerenciar.css"/>
    <!--Modal's CSS file  -->
    <link rel="stylesheet" href="../Assets/Css/modal.css">
    <!--Footer's CSS file  -->
    <link rel="stylesheet" href="../Assets/Css/footer.css">

    <!--My JS file  -->
    <script src="../Assets/Js/script.js"></script>
    
</head>
<body class="container">
    <!--Header-->
    <?php
        include("header.html");
    ?>
   
    <main>    
        <section>
            <div class="perfil col-md-10 col-xs-12">
                <div id="infoWrap" class="col-md-9 col-xs-9">
                    <div>
                        <img id="myPhoto"  src="../Assets/Img/profile1.jpg" alt="Foto">
                    </div>
                    <div id="info">
                        <span id="profileName">Primeiro Segundo Terceiro</span>
                        <span id="profileRole">Cargo</span>
                    </div>
                </div>
                <span class="col-md-3 col-xs-3 text-center" id="profilePoints">Pontos: 20</span>
            </div>

            <div class="col-md-10 col-xs-12">
                <div class="panel panel-primary">
                    <div class="panel-heading"><h3>Minhas Advertências</h3></div>
                    <div class="panel-body table-responsive">
                        <table id="innerTable" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Motivo</th>
                                    <th>Data</th>
                                    <th>Pontos</th>
                                    <th>Responsável</th>
                                    <th>Indeferida</th>
                                </tr>
                                
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Ausência nas reuniões</td>
                                    <td>22/07/2017</td>
                                    <td>4</td>
                                    <td>Kayo Costa</td>
                                    <td>Não</td>
                                </tr>  
                                <tr>
                                    <td>Ausência nas reuniões</td>
                                    <td>22/07/2017</td>
                                    <td>4</td>
                                    <td>Kayo Costa</td>
                                    <td>Não</td>
                                </tr>  
                                <tr>
                                    <td>Ausência nas reuniões</td>
                                    <td>22/07/2017</td>
                                    <td>4</td>
                                    <td>Kayo Costa</td>
                                    <td>Não</td>
                                </tr>  
                            </tbody>
                        </table>
                    </div>
                </div>   
            </div>
            
            <button class="filled" data-role="modalTrigger">
            Adicionar
            </button>
        </section>
    </main>
    <!--Footer-->
    <?php
        include("footer.html");
    ?>
    
</body>

    <?php
        include("modal.html");
    ?>


<script src="../Vendors/Js/jquery-3.2.1.min.js"></script>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../Vendors/Js/bootstrap.min.js"></script>
<!--Datepicker's JS file  -->
<script src="../Vendors/Js/bootstrap-datepicker.js"></script>
<script src="../Vendors/Js/bootstrap-datepicker.pt-BR.min.js"></script>
</html>