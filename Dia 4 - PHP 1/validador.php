<?php
    $meu_nome = "Douglas";
    if(isset($_GET["nome"])){
        if($_GET["nome"]==$meu_nome)
            header("location:form.php?valid=true");
        else
            header("location:form.php?valid=false");
    }
        
?>