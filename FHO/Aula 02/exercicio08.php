<?php

    $positivo = 0;
    $negativo = 0;

    for ($i = -10; $i <= 10; $i++) {
        if($i > 0)
            $positivo += $i;
        else
            $negativo -= $i;
    }

    echo "Positivo: $positivo";
    echo "<br>";
    echo "Negativo: $negativo";


?>