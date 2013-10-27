<!DOCTYPE html>
<html>
    <head>
        <title>insere clientes</title>
    </head>
<body>
    <h3>deseja cadastrar novo clientes Informe os campos abaixo:</h3>
    <form>
        <fieldset>
            <label>Nome do novo cliente<input type="text" name="novo_cliente"></label><br>
            <label>Codigo:<input type="text" name="id_cliente"></label><br>
            <label>Altura:<input type="number" name="altura"></label><br>
            <label>Idade:<input type="number" name="idade"></label><br>
            <label>Data de Nascimento:<input type="date" name="nascimento"></label><br>
            <label>Escolaridade:<input type="text" name="escolaridade"></label>
            <input type="submit">
        </fieldset>
    </form>
<?php
    include_once 'Conta.php';
    include_once 'Pessoa.php';

    $pessoa = new Pessoa;
    $pessoa->codigo=$_POST["id_cliente"];
    $pessoa->nome=$_POST["novo_cliente"];
    $pessoa->altura=$_POST["altura"];
    $pessoa->idade= $_POST["idade"];
    $pessoa->nascimento= $_POST["nascimento"];
    $pessoa->Escolaridade=$_POST["escolaridade"];

    echo "Manipulando o objeto {$pessoa->nome} : \n";
    echo "{$pessoa->nome} é Formado em : {$pessoa->Escolaridade} \n";
?>
</body>
</html>
