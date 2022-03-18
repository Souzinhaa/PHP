<?php

    $numero1 = 125;
    $numero2 = 999;
    $numero3 = 11;

    echo "var: $numero1 - $numero2 - $numero3 >>>>>>>>>>> ORDENADO: ";

    if($numero1 > $numero2){
        if($numero1 > $numero3){
            if($numero2 > $numero3){
                echo "$numero1 - $numero2 - $numero3";
            } else {
                echo "$numero1 - $numero3 - $numero2";
            }
        } else {
            if($numero2 > $numero3){
                echo "$numero2 - $numero3 - $numero1";
            } else {
                echo "$numero3 - $numero2 - $numero1";
            }
        }
    } elseif($numero2 > $numero3) {
        if($numero1 > $numero3){
            echo "$numero2 - $numero1 - $numero3";    
        } else {
            echo "$numero2 - $numero3 - $numero1";  
        }
    } else {
        echo "$numero3 - $numero2 - $numero1";
    }

?>

