<?
	$database="mydb";
	$conexao=mysql_connect('Localhost','root','12345')or die (mysql_error());
	$banco=mysql_select_db($database)or die(mysql_error());

if(isset($_REQUEST['entrar'])){
	$email  =$_REQUEST['email'];
	$senha  =$_REQUEST['senha'];
	$sql= "SELECT * FROM  `Usuarios` WHERE Email ='$email' AND Senha =$senha ";
    $query= mysql_query($sql) or die (mysql_error());
    $qtda = mysql_num_rows($query);

    if($qtda == 0){
    	?><br><?php echo "erro ao logar...";
    }
    else{

    	session_start();

    	$_SESSION['email'] = $email;
    	$_SESSION['senha'] = $senha;
    	header("location: home.php");
    }
    
}

?>