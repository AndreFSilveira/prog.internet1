<?php session_start(); ?>
<?php

	if(!isset($_SESSION['email'])&&(!isset($_SESSION['senha']))){

		header("location: login.php");
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>home page</title>
	<style type="text/css">
	div{
		border: solid;
		background-color: black;
		color: white;
		width: 100%;
		height: 50px;
	}
	</style>
</head>
<body>
	<div>
	<?php
		$secao_email	= $_SESSION['email'];
		$secao_senha  = $_SESSION['senha'];
	?>
		<h2>Bem vindo : <?php echo $secao_email ?></h2>
		<iframe  name="principal" frameborder="no" scrolling="no"></iframe>
		<br><br><center><a href="?Sair">Sair</a></center>
		<?php if(isset($_REQUEST['Sair'])){
			session_destroy();
			header("location: login.php");
		}
		 ?>
	</div>
</body>
</html>
