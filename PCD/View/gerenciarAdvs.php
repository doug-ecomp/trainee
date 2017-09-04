<!DOCTYPE html>

<?php
    include("../Controller/session_check.php");
?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>EcompJr - Gerenciar Membros</title>
  

    <!-- Bootstrap -->
    <link rel="stylesheet" href="../Vendors/Css/bootstrap.min.css">

    <!--General CSS file  -->
    <link rel="stylesheet" href="../Assets/Css/style.css">
    <!--Header's CSS file  -->
    <link rel="stylesheet" href="../Assets/Css/header.css">
    <!--Table's CSS file  -->
    <link rel="stylesheet" href="../Assets/Css/gerenciar.css"/>
    <!--Footer's CSS file  -->
    <link rel="stylesheet" href="../Assets/Css/footer.css">

    <!--My JS file  -->
    <script src="../Assets/Js/admPCD.js"></script>
    

</head>
<body class="container">

    <?php
        include("header.html");
    ?>
    <main>
        <section>
            <div class="col-md-10 col-xs-12">
                <div class="panel panel-primary">
                    <div class="panel-heading"><h3>Membros</h3></div>
                        <div class="panel-body table-responsive">
                            <table id="mainTable" class="table table-condensed table-hover " style="border-collapse:collapse;">
                                <thead>
                                    <tr>
                                        <th>&nbsp;</th>
                                        <th>Nome</th>
                                        <th>Cargo</th>        
                                                        
                                    </tr>
                                </thead>

                                <tbody>
                                    <!-- MAIN TABLE ROW-->
                                    <tr id="mtrow1" data-toggle="collapse" class="accordion-toggle">
                                        <td><button id="btn1MT" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-plus"></span></button></td>
                                        <td>Gustavo</td>
                                        <td>Trainee</td>
                                    
                                    </tr>
                                    <!--HIDDEN ROW -->
                                    <tr>
                                        <td colspan="12" class="hiddenRow">
                                            <div class="accordian-body collapse table-responsive" id="hrow1"> 
                                                <table id="innerTable" class="table  table-bordered">
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
                                                <a href="member.php"><button class="filled" type="button">Gerenciar</button></a>
                                            </div> 
                                        </td>
                                    </tr>   
                                    <!-- MAIN TABLE ROW-->
                                    <tr id="mtrow2" data-toggle="collapse" class="accordion-toggle">
                                        <td><button id="btn2MT" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-plus"></span></button></td>
                                        <td>Kayo</td>
                                        <td>DRH</td>                             
                                    </tr>  
                                    <!--HIDDEN ROW -->
                                    <tr>
                                        <td colspan="12" class="hiddenRow">
                                            <div class="accordian-body collapse table-responsive" id="hrow2"> 
                                                <table id="innerTable" class="table ">
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
                                                                <td>Atitudes negativas</td>
                                                                <td>22/07/2017</td>
                                                                <td>10</td>
                                                                <td>Pedro Neri</td>
                                                                <td>Não</td>
                                                            </tr>     
                                                        </tbody>
                                                </table>
                                                <a href="member.php"><button class="filled" type="button">Gerenciar</button></a>
                                            </div> 
                                        </td>
                                    </tr>   
                                    <!-- MAIN TABLE ROW-->
                                    <tr id="mtrow3" data-toggle="collapse" class="accordion-toggle">
                                        <td><button id="btn3MT" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-plus"></span></button></td>
                                        <td>Lucas</td>
                                        <td>Membro</td>
                                    
                                    </tr>
                                    <!--HIDDEN ROW -->
                                    <tr>
                                        <td colspan="12" class="hiddenRow">
                                            <div class="accordian-body collapse table-responsive" id="hrow3"> 
                                                <table id="innerTable" class="table ">
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
                                                <a href="member.php"><button class="filled" type="button">Gerenciar</button></a>
                                            </div> 
                                        </td>
                                    </tr>   
                                </tbody>
                            </table>
                    </div>
                </div>   
            </div>
        </section>
    </main>
   
   <?php
        include("footer.html");
   ?>

</body>

<script src="../Vendors/Js/jquery-3.2.1.min.js"></script>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../Vendors/Js/bootstrap.min.js"></script>
<!--Datepicker's JS file  -->
</html>
