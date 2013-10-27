<?php
    class Conta
    {
        var $agencia;
        var $codigo;
        var $dataCriacao;
        var $Titular;
        var $senha;
        var $saldo;
        var $cancela;

        function Retirar ($quantia){
            if($quantia > 0){
                $this->saldo -= $quantia;
            }
        }
        function  Deposito ($quantia){
            if($quantia > 0 ){
                $this->saldo += $quantia;
            }
        }
        function  Saldo (){
            return $this->saldo;
        }
    }