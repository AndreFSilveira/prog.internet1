<html>
<head>
    <title>dados</title>
</head>
<body>
<h1>Informe a posicao em que deseja verificar seu correspondente em numeros primos:</h1>
<form method="post">
    <input type="Text" name="posicao">
    <input type="submit">
    <?php

    function verifica_primo($num2, $aux){
     $i;

    for($i=2;$i<=($aux+1);$i++){
        if($num2 % $i == 0)
            return 0;
    }
    return 1;
}
    ?>
    <?

    $num=0;
    $cont=0;
    $primo=2;
    $aux=0;
    ?>
    <?

    $num=$_POST["posicao"];
    if($num < 1){
        echo 'Digite um valor maior que 0 (zero) para informar a posicao:';
        exit;
    }
    do{
        if(($primo % 2 == 0) &&( $primo != 2)){
            $primo++;
        }
        $aux=($primo/2);
        if(verifica_primo($primo,$aux)==1 or($primo==2)){
            $cont++;
            if($cont!=$num)
                $primo++;
        }
        else
            $primo++;
    }while($cont!=$num);
    ?>
    <?
    echo 'O Numero primo na posicao ', $num ,' eh: ',$primo;
    ?>
</form>
</body>
</html>


