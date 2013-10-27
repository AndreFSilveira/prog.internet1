<?php session_start();
    $database="mydb";
    $conexao=mysql_connect('Localhost','root','12345') or die (mysql_error());
    $banco=mysql_select_db($database)or die(mysql_error());

if(isset($_REQUEST['entrar'])){
    $email  =$_REQUEST['email'];
    $senha  =$_REQUEST['senha'];
    $sql= "SELECT Usuario , IdUsuario FROM  `Usuarios` WHERE Email ='$email' AND Senha =$senha ";
    $query= mysql_query($sql);
    $dado= mysql_fetch_array($query);
    $qtda = mysql_num_rows($query);


    if($qtda == 0){

        echo "<br>Erro ao logar... Senha ou Usuario Invalido!";
    }
    else{


        $_SESSION['usuario'] = $dado["Usuario"];
        $_SESSION['id'] = $dado["IdUsuario"] ;
        header("location: home1.php");
    }
    
}
?>
