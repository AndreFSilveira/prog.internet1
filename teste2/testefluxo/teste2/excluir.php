<?php
	
	Require_once('funcoes.php'); 
    $status=$_GET['ex'];
    $codigo=$_GET['codigo'];
    $num   =$_GET['num'];
    verificaconexao();
    conexao();
    homepage();

 ?>
 <!DOCTYPE html>
 <html>
 	<head>
 		<title>Pagina de Exclusao</title>

 	</head>
 	<body>
 	<?php if(isset($_REQUEST['home'])){    
            header("location: home1.php");
          }
    ?>
 		<?php
 //exclusao do tipo		
 			if($status == 1)
 			{
 		?>
 		<div class="editor">
 			<table>
 				<tr>
 					<td colspan="3" class="aviso"><h3>Deseja Realmente Excluir o Tipo Abaixo ?</h3></td>
 				</tr>
 				<tr>
 					<td class="infotabela">Codigo</td>
 					<td class="infotabela">Tipo</td>
 					<td class="infotabela">OBS</td>
 				</tr>
 				<?php
 					$sql=("SELECT * FROM Tipo_Veiculo WHERE IdTipo_automoveis= $codigo");
 					$result=mysql_query($sql)or die(mysql_error());
 					while( $tbl = mysql_fetch_assoc($result))
 					{
 						$cod  = $tbl['IdTipo_automoveis'];
 						$tipo = $tbl['Tipo_Veiculo'];
 						$obs  = $tbl['Obs_Veiculo'];
 						echo "<tr>";
 						echo "<td class='campos'>$codigo</td>";
 						echo "<td class='campos'>$tipo</td>";
 						echo "<td class='campos'>$obs</td>";
 						echo "</tr>";
 					}
 				?>	
 			</table>
 		<?php
 			echo "<a href='exclusao.php?id=1&codigo=$cod'><input type='submit' class='BTexcluir' value='Deletar'></a><a href='?home'><input class='BTexcluir' type='submit' value='Voltar a Home'></a>";
			}
//manda a marca para a exclusao			
		if($status == 2)
 			{
 		?>
 		<div class="editor">
 			<table>
 				<tr>
 					<td colspan="3" class="aviso"><h3>Deseja Realmente Excluir a Marca Abaixo ?</h3></td>
 				</tr>
 				<tr>
 					<td class="infotabela">Codigo</td>
 					<td class="infotabela">Marca</td>
 					<td class="infotabela">OBS</td>
 				</tr>
 				<?php
 					$sql=("SELECT * FROM Marcas WHERE IdMarcas= $codigo");
 					$result=mysql_query($sql)or die(mysql_error());
 					while( $tbl = mysql_fetch_assoc($result))
 					{
 						$cod  = $tbl['IdMarcas'];
 						$marca = $tbl['Marca'];
 						$obs  = $tbl['Obs_marcas'];
 						echo "<tr>";
 						echo "<td class='campos'>$codigo</td>";
 						echo "<td class='campos'>$marca</td>";
 						echo "<td class='campos'>$obs</td>";
 						echo "</tr>";
 					}
 				?>	
 			</table>
 		<?php
 			echo "<a href='exclusao.php?id=2&codigo=$cod'><input type='submit' class='BTexcluir' value='Deletar'></a><a href='?home'><input class='BTexcluir' type='submit' value='Voltar a Home'></a>";
			}
//manda o veiculo Exclui o veiculo
 		if($status == 3)
	 			{
	 		?>
			 	<div class="editor">
			 		<table>
			 		<tr>
		                <td class="aviso" colspan="8"><h3>Deseja Realmente Excluir o Veiculo Abaixo?</h3></td>
		            </tr>
		            <tr class="infotabela">
		                <td class="infotabela">Codigo</td>
		                <td class="infotabela">Placa</td>
		                <td class="infotabela">Ano</td>
		                <td class="infotabela">Modelo</td>
		                <td class="infotabela">OBS</td>
		                <td class="infotabela">Marca</td>
		                <td class="infotabela">Tipo</td>
		                <td class="infotabela">Usuario</td>
		            </tr>

		            <?
		            $sql=("SELECT * FROM Descricao_veiculo INNER JOIN Marcas ON Descricao_veiculo.Marcas_idMarcas = Marcas.idMarcas INNER JOIN Tipo_Veiculo ON Descricao_veiculo.Modelo_Veiculo_idTipo_automoveis = Tipo_Veiculo.IdTipo_automoveis INNER JOIN Usuarios ON Descricao_veiculo.Usuarios_idUsuarios = Usuarios.IdUsuario WHERE IdDescricao_veiculo=$codigo");
 					$result=mysql_query($sql)or die(mysql_error());
		            While( $tbl =mysql_fetch_assoc($result))
		            {
		                
		                $cod    = $tbl["IdDescricao_veiculo"];
		                $placa     = $tbl["Placa"];
		                $ano       = $tbl["Ano"];
		                $modelo    = $tbl["Modelo"];
		                $ob_descr  = $tbl["Obs_Descricao"];
		                $marca     = $tbl["Marca"];
		                $tipoauto  = $tbl["Tipo_Veiculo"];
		                $usuario   = $tbl["Usuario"];
		                

		                echo "<tr>";
		                echo "<td class='campos'>$cod</td>";
		                echo "<td class='campos'>$placa</td>";
		                echo "<td class='campos'>$ano</td>";
		                echo "<td class='campos'>$modelo</td>";
		                echo "<td class='campos'>$ob_descr</td>";
		                echo "<td class='campos'>$marca</td>";
		                echo "<td class='campos'>$tipoauto</td>";
		                echo "<td class='campos'>$usuario</td>";
		                echo "</tr>";
		            }
	 				?>	
	 			</table>
 		<?php
 			echo "<a href='exclusao.php?id=3&codigo=$cod'><input type='submit' class='BTexcluir' value='Deletar'></a><a href='?home'><input class='BTexcluir' type='submit' value='Voltar a Home'></a>";
			}

 		if($status == 4)//codigo para exclusao de usuario
 			{			
			
		?>
		<div class="editor">
			<table>
				<tr>
					<td colspan="2" class="aviso"><h3>Deseja Realmente Excluir o Usuario Abaixo ?</h3></td>
				</tr>
				<tr>
					<td class="infotabela">Codigo</td>
					<td class="infotabela">Usuario</td>
				</tr>
				<?php

					$sql=("SELECT * FROM Usuarios WHERE IdUsuario= $codigo ");
					$result=mysql_query($sql) or die (mysql_error());
					While( $tbl =mysql_fetch_assoc($result))
	            	{
		                $codigo    = $tbl["IdUsuario"];
		                $usuario   = $tbl["Usuario"];
		                echo"<tr>";
		                echo "<td class='campos'>$codigo</td>";
		                echo "<td class='campos'>$usuario</td>";
		                echo"</tr>";
	            	}
				?>
			</table>
		<?php
		echo "<a href='exclusao.php?id=4&codigo=$codigo'><input class='BTexcluir' type='submit' value='Deletar'></a><a href='?home'><input class='BTexcluir' type='submit' value='Voltar a Home'></a>";
			
 			}

 		?>
 	</body> 
 	</html> 