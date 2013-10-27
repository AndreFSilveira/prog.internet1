<?php 
$con = mysql_connect('localhost','root','12345');
if(!$con){die("Problema na conexão com o banco de dados"); }

// STEP 1: INCLUDING AJAX AGENT FRAMEWORK/LIBRARY
include_once("agent.php");
?>

<html>
<head>
<title>@PRDOTUOS@</title>
<?php
	$agent->init(); 
?>
</head>
<body>
<script language="JavaScript">
	/**
	*	Função que é executada sempre que uma tecla é digitada dentro do campo do formulário.
	*	Está função também é executada assim que a página é carregada, para listagem completa dos produtos.
	* 	os parametros passados sao: funcado do php chamada,funcao javascript que é executada, e valor passado para a funcao php.
	*/
	function call_listaProdutos(){
		var letra = document.getElementById('nome').value;
		agent.call('','listaProdutos','callback_listaProdutos',letra);
		document.getElementById('listaDeProdutos').innerHTML = "pesquisando....";
	}
	
	/**
	* Funcao que recebe o return da funcao php. valores podem ser tratados
	*/
	function callback_listaProdutos(str) {
		document.getElementById('listaDeProdutos').innerHTML = str;
	}
 </script>


<form name= formulario method="post">
<?php
	$sql = "SELECT * FROM produtos";
  	$query = mysql_db_query('produtos',$sql,$con);
?>
Digite um nome:
<input type="text" name="nome" id="nome" onkeyup="call_listaProdutos();">
</form>
<div id="carregando"></div>
<div id="listaDeProdutos"></div>


</body>
</html>

<?php 
   //Funcao php que recebe a letra.
  // a forma mais correta seria retornar um array para a funcao callback_listaProdutos, mas fiz de uma forma simplificada
  // o unico caso em que a funcao callback_listaProdutos recebe um valor, nesse caso, eh quando não é encontrado produtos.
function listaProdutos($letra){

	
	//a conexao precisa ser criada novamente pois a forma com que o java script chama essa funcao eh como se ela fosse uma página externa, 
	$con = mysql_connect("localhost","root","12345");
	if(!$con){die("Problema na conexão com o banco de dados"); }
	
	$sql = "SELECT id,nome FROM produtos where nome like  '%$letra%'";
	$query = mysql_db_query('produtos',$sql,$con);

	

	if(mysql_num_rows($query)>0){
		if(empty($letra)){
			$letra = "<b>TODOS</b>";
		}
		echo "Pesquisa realizada: ".$letra."<br>";
		echo "Total de registros <b>".mysql_num_rows($query)."</b>";
		
		echo "<table border =1>";
		echo "<tr><td>Id</td><td>Nome</td></tr>";
		$i=0;
		
		while ($row = mysql_fetch_array($query) ){
			echo "<tr><td>" . $row['id']."</td><td>".$row['nome'] ."</td></tr>";
		}
		echo "</table>";
	}else{
		return "Nenhum registro Localizado";
	}
}
?>