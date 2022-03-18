<?php

    $numero = 17;

    if (($numero % 10) == 0){
        echo "Numero divisivel por 10";
    } elseif (($numero % 5) == 0){
        echo "Numero divisivel por 5";
    } elseif (($numero % 2) == 0){
        echo "Numero divisivel por 2";
    } else {
        echo "Numero nao divisivel por 10, 5 e 2";
    }

?>

