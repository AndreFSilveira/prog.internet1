<?php Require_once('funcoes.php');?>
<html> 
<head>
	<title></title>
</head>
<body>
<?php
	if(isset($_POST['enviar'])){
		$nome =$_POST['nome'];
		$email=$_POST['email'];
		$senha=$_POST['senha'];
		$sql_inserir= "INSERT INTO Usuarios (Usuario, Email, Senha) VALUES ('$nome','$email', $senha) ";
		conexao();
		if(inserir($sql_inserir)){
			echo ("Dado inserido com Sucesso! codigo do intem insserido: ".mysql_insert_id());
		}
		else{
			echo ("Erro regitro não foi inserido".mysql_error());
		}
	}
?>	
	<form method="POST" enctype="multipart/form-data" action="">
		    <br>Nome: <input type="text" maxlength="40" name="nome">
			<br>Email:<input type="text" maxlength="100" name="email">
			<br>Senha:<input type="password" maxlength="8" name="senha">
			<input type="submit" value="Cadastrar" name="enviar">		
	</form>
</body>
</html>