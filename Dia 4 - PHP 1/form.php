<html>
<head>
    <title>Formulário PHP</title>
</head>
<body>
    <h1>Qual meu nome?</h1>
    <form action="validador.php" method="GET">
        <input type="text" name="nome" placeholder="#nome" >
        <input type="submit" value="Confirmar">
    </form>
    <h1> 
    <?php 
        if(isset($_GET["valid"])){
            if($_GET["valid"]=="true"){
                echo "Eu sou o Dougras, vc não é o Dougras...";
            } else {
                echo "Errou, misera";
            }
        }
    ?>
    </h1>
</body>

</html>