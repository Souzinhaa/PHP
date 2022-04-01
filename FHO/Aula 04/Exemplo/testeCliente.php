<?php

    include("classCliente.php");

    $cliente1 = new cliente("Corba");
    $cliente1->confirmar_recebimento(200);
    $cliente1->imprimir_saldo();
    $cliente1->pagar_conta(50);
    $cliente1->pagar_conta(500);

?>