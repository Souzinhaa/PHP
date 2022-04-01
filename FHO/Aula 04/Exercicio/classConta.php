<?php

    class conta{
        protected $numero;
        protected $saldo;
        protected $valor_aplicado;

        public function get_conta(){
            return $this->numero;
        }

        public function get_saldo(){
            return $this->saldo;
        }

        function __construct($numero_conta){
            $this->numero = $numero_conta;
            $this->saldo = 0;
            $this->valor_aplicado = 0;
        }

        public function sacar($valor){
            if($this->saldo >= $valor){
                $this->saldo -= $valor;
                echo "<br>Sucesso ao sacar";  
            }else{
                echo "<br>Saldo insuficiente";
            }
        }

        public function depositar($valor){
            $this->saldo += $valor; 
            echo "<br>Sucesso ao depositar";   
        }

        public function aplicar($valor){
            if($this->saldo>=$valor){
                $this->valor_aplicado += ($valor*1.05);
                $this->saldo -= $valor; 
                echo "<br>Sucesso ao aplicar";  
            }else{
                echo "<br>Saldo insuficiente";
            }
        }

        public function resgatar($valor){
            if($this->valor_aplicado >= $valor){
                $this->valor_aplicado -= $valor;
                $this->saldo += $valor;
                echo "<br>Sucesso ao resgatar";  
            }else{
                echo "<br>Valor Aplicado Insuficiente para Resgate.";
            }
        }

        public function resgateTotal(){
            $this->saldo += $this->valor_aplicado;
            $this->valor_aplicado = 0;
            echo "<br>Sucesso ao resgatar tudo";  
        }

        public function extrato(){
            echo "<br>Saldo total: ".$this->saldo;
            echo "<br>Valor Aplicado: ".$this->valor_aplicado;
            if($this->saldo > 0){
                echo "<br>Quer aumentar seus ganhos? Aplique seu dinheiro";
            }
        }
    }

?>