<?php
    /*$nome = "Douglas";
    echo "Hello, " . $nome;*/

    $gostos = ["comer", "dormir", "ler"];

    /*
    if($nome == "Douglas"){
        echo "certo";
    }*/

    /*for ($i=0; $i < sizeof($gostos); $i++) { 
        echo "<p>" . $gostos[$i] . "</p>";
    
    }*/
    /*
    for ($i=0; $i <= 100; $i++) {
        
        echo $i . ": ";
        if($i!=0) {
            if(($i%2)==0){
                echo "FIZZ";
                if(($i%3)==0){
                    echo " BUZZ";
                }
            }
            else if(($i%3)==0){
                echo "BUZZ";
            }
            else {
                echo $i;
            }
        } else {
            echo $i;
        }
        echo "<br>";
    }*/

    $hash = [
        "name" => "Douglas",
        "Idade" => "24",
        "Nacionalidade" => "Brasileiro"
    ];
    
    // var_dump($hash);
    
    echo $_GET["test"];
    echo "<br>";
    echo $_GET["test2"];
    echo "<br>";

    if(!isset($_GET["test3"])) {
        echo "test3 não definida";
    }
    else
        echo $_GET["test3"];
    
    echo "<br>";

?>