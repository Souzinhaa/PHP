<?php

    include("classConta.php");

    class contaEspecial extends conta{

        public function bonus($valor){
            $this->saldo += ($valor*1.05);
        }
    }

?>