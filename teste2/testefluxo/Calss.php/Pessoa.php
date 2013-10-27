<?php
    class Pessoa
    {
        var $codigo;
        var $nome;
        var $altura;
        var $idade;
        var $nascimento;
        var $Escolaridade;
        var $salario;

        function  __construct ($codigo , $nome, $altura, $idade, $nascimento, $Escolaridade, $salario)
        {
            $this->codigo = $codigo;
            $this->nome= $nome;
            $this->altura= $altura;
            $this->idade=$idade;
            $this->nascimento=$nascimento;
            $this->Escolaridade= $Escolaridade;
            $this->salario=$salario;
        }
        function __destruct()
        {
            echo "Objeto {$this->nome} finalizado... \n";
        }

    }
?>