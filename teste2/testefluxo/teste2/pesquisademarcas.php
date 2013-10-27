<?php
	
	Require_once('funcoes.php');
	//verificaconexao();
	conexao();

	$modelo= $_GET['modelo'];
	$marca = $_GET['marca'];
	$tipo  = $_GET['tipo'];

	echo($modelo);
	echo ($marca);
	echo ($tipo);

	$sql=("SELECT * FROM Descricao_veiculo INNER JOIN 
		   Marcas ON Descricao_veiculo.Marcas_idMarcas = Marcas.idMarcas
		   INNER JOIN Tipo_Veiculo ON 
		   Descricao_veiculo.Modelo_Veiculo_idTipo_automoveis = Tipo_Veiculo.IdTipo_automoveis
		    INNER JOIN Usuarios ON Descricao_veiculo.Usuarios_idUsuarios = Usuarios.IdUsuario 
		    WHERE Marcas.IdMarcas = 1");// AND Tipo_Veiculo.IdTipo_automoveis = $tipo AND Descricao_veiculo.Modelo = $modelo");

	$rs = mysql_query($sql);


 	$rows = array();
	while($row = mysql_fetch_assoc($rs)) {
		$rows[] = $row;
	}


  
	echo json_encode(array('veiculos' => $rows));
?>