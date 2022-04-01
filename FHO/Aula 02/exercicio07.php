<?php

    $nome = "PHP - Completo";
    $tipo = "a";
    $qtdP = 10;
    $qtdA = 3;

    if($tipo === "PROFESSOR"){
        echo "***** RECIBO $tipo*****";
        echo "<br>";
        echo "Livro: $nome";
        echo "<br>";
        echo "Devolver em $qtdP dias";
        echo "<br>";
    } elseif ($tipo === "ALUNO") {
        echo "***** RECIBO $tipo*****";
        echo "<br>";
        echo "Livro: $nome";
        echo "<br>";
        echo "Devolver em $qtdA dias";
        echo "<br>";
    } else {
        echo "Não existente.";
    }


?>

