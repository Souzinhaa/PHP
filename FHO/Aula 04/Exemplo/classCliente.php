<?php

    class cliente{
        protected $nome;
        private $saldo;

        function __construct($nome_cliente){
            $this->nome = $nome_cliente;
            $this->saldo = 0;
        }

        public function get_nome(){
            return $this->$nome;
        }

        public function imprimir_saldo(){
            echo "<br> Saldo atual = ".$this->saldo;
        }

        public function confirmar_recebimento($valor){
            $this->saldo += $valor;
            echo "<br> Confirmacao de recebimento <br>
            Valor recebido = ".$valor;
        }

        public function pagar_conta($valor){
            if($this->saldo >= $valor){
                $this->saldo -= $valor;
                echo "<br>Foi pago a conta de ".$valor;
            }else{
                echo "<br>Saldo insuficiente";
            }
        }
    }

?>