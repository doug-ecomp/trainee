<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EcompJr</title>

    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">  

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


    <!--General CSS file  -->
    <link rel="stylesheet" href="css/style.css">
    <!--Header's CSS file  -->
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/gerenciar.css" />
    <!--Modal's CSS file  -->
    <link rel="stylesheet" href="css/modal.css">
    <!-- Datepicker's CSS file -->
    <link href="css/datepicker.css" rel="stylesheet">
    <!--Footer's CSS file  -->
    <link rel="stylesheet" href="css/footer.css">

    <!--My JS script  -->
    <script src="js/script.js"></script>
    
</head>
<body class="container">
    
    <?php
        include("header.html");
    ?>
   
    <main>    
        <section>
            <div class="perfil col-md-10 col-xs-12">
                <div id="infoWrap" class="col-md-9 col-xs-9">
                    <div>
                        <img id="myPhoto"  src="img/profile1.jpg" alt="Foto">
                    </div>
                    <div id="info">
                        <span id="profileName">Douglas Almeida Carneiro</span>
                        <span id="profileRole">Trainee</span>
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
    
    <?php
        include("footer.html");
    ?>
    
</body>

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