<?php
Function conexao(){
	$banco="mydb";
	$usuario="root";
	$senha="12345";
	$local="localhost";
	$conn= mysql_connect($local,$usuario,$senha)or die('Não foi possivel se conectar ao banco de dados');
	mysql_select_db($banco) or die ('Banco não localizado'.mysql_error());
	mysql_query("SET NAMES 'utf8'");
	mysql_query("SET character_set_connection = utf8");
	mysql_query("SET character_set_cliente = utf8");
	mysql_query("SET caracter_set_results = utf8");
}
Function inserir($sql){
	if(mysql_query($sql)){
		return TRUE;
	}
	else{
		return FALSE;
	}

}
?>