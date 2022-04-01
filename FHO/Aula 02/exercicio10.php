<?php

    $crescendo = true;
    $ano = 0;
    $chico = 150;
    $juca = 110;

    do{

        $chico = $chico + (2*$ano);
        $juca = $juca + (3*$ano);

        $ano += 1;
    }while($chico > $juca);

    echo "$ano anos.";

?>