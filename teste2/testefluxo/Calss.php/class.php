
<?php
class Produto
{
    var $codigo;
    var $descricao;
    var $preco;
    var $quantidade;
    function  ImprimeEtiqueta()
    {
        print 'Código:    '.$this->codigo .'       ';
        print 'Descricao: '.$this->descricao . '       ' ;
    }
}
?>
