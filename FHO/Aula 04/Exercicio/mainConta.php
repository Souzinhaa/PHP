<?php

    include("classContaEspecial.php");

    $conta1 = new conta("1");
    $conta1->depositar(100);
    echo "<br>Saldo: ".$conta1->get_saldo();
    $conta1->sacar(200);
    $conta1->extrato();
    $conta1->aplicar(50);
    $conta1->extrato();
    $conta1->resgatar(100);
    $conta1->resgatar(50);
    $conta1->extrato();
    $conta1->sacar(100);
    $conta1->extrato();
    
    $conta2 = new contaEspecial("2");
    $conta2->bonus(1000);
    $conta2->extrato();

?>