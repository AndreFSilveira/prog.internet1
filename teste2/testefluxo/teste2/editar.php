<?php	
	Require_once('funcoes.php'); 
    $status=$_GET['ed'];
    $codigo=$_GET['codigo'];
    
    verificaconexao();
    conexao();
    homepage();

?>
<!DOCTYPE html>
	<html lang="pt-br">
	<head>
		<title>Editar Registros</title>
		<style type="text/css">
			#editar{
				position: absolute;
				margin-left: 50%;
				margin-top: 23%;
				width: 40%;
			}
		</style>
	</head>
	<body>
		
		<?php
			if($status == 1 ){//tipo
		?>
		<div class="editor">
				<table>
				<tr>
					<td colspan="3" class="titulotabela"><h3>Editar Tipo</h3></td> 
				</tr>
				<tr>
					<td class="infotabela">Codigo</td>
					<td class="infotabela">Tipo</td>
					<td class="infotabela">OBS</td>
				</tr>
		<?php
				$sql=("SELECT * FROM Tipo_Veiculo WHERE IdTipo_automoveis=$codigo");
				$result=mysql_query($sql) or die (mysql_error());

				While( $tbl =mysql_fetch_assoc($result))
            	{
	                $codigo    = $tbl["IdTipo_automoveis"];
	                $tipo      = $tbl["Tipo_Veiculo"];
	                $ob_tipo   = $tbl["Obs_Veiculo"];
	                echo"<tr>";
	                echo "<td class='campos'>$codigo</td>";
	                echo "<td class='campos'>$tipo</td>";
	                echo "<td class='campos'>$ob_tipo</td>";
	                echo"</tr>";
            	}	
		?>
		</table>
		<div>
		<?php
		  echo"<form method='POST' action='inserecadastro.php?id=6&codigo=$codigo'>";
		?>	
			<fieldset>
				<label ><h3 align="center">Editar Registro</h3></label>
				<label>Tipo: <input type="text" name="alteranome"></label>
				<br><label>Obs:<br><textarea name="obs" rows="6" cols="40"></textarea></label><br>
				<input type="submit" name="enviar" value="Alterar"><input type="reset" value="Zerar Campos">
			</fieldset>
		</form>
		</div>
		</div>
		<?php
			}
			if($status==2)//marca
			{
		?>
			<div class="editor">
			<table>
				<tr>
					<td colspan="3" class="titulotabela"><h3>Editar Marca</h3></td>
				</tr>
				<tr>
					<td class="infotabela">Codigo</td>
					<td class="infotabela">Marca</td>
					<td class="infotabela">OBS</td>
				</tr>
				<?php

					$sql=("SELECT * FROM Marcas WHERE IdMarcas=$codigo");
					$result=mysql_query($sql) or die (mysql_error());
					While( $tbl =mysql_fetch_assoc($result))
	            	{
		                $codigo    = $tbl["IdMarcas"];
		                $marca      = $tbl["Marca"];
		                $ob_marca   = $tbl["Obs_marcas"];
		                echo"<tr>";
		                echo "<td class='campos'>$codigo</td>";
		                echo "<td class='campos'>$marca</td>";
		                echo "<td class='campos'>$ob_marca</td>";
		                echo"</tr>";
	            	}
				?>
			</table>
			<div>
			<?php
				 echo "<form method='POST' action='inserecadastro.php?id=7&codigo=$codigo'>"; 
			?>			
				<fieldset>
					<label ><h3 align="center">Editar Registro</h3></label>
					<label>Marca: <input type="text" name="alteranome"></label>
					<br><label>Obs:<br><textarea name="obs" rows="6" cols="40"></textarea></label><br>
					<input type="submit" name="enviar" value="Alterar"><input type="reset" value="Zerar Campos">
				</fieldset>
			</form>
			</div>
			</div>
			<?php
				}
				if($status==3)
				{
			?>
			<div class="editor">
			<table>
				<tr>
					<td colspan="8" class="titulotabela"><h3>Editar Veiculo</h3></td>
				</tr>
				<tr>
					<td class="infotabela">Codigo</td>
	                <td class="infotabela">Placa</td>
	                <td class="infotabela">Ano</td>
	                <td class="infotabela">Modelo</td>
	                <td class="infotabela">OBS</td>
	                <td class="infotabela">Marca</td>
	                <td class="infotabela">Tipo</td>
	                <td class="infotabela">Usuario</td>
				</tr>
				<?php
					$sql=("SELECT * FROM Descricao_veiculo INNER JOIN Marcas ON Descricao_veiculo.Marcas_idMarcas = Marcas.idMarcas INNER JOIN Tipo_Veiculo ON Descricao_veiculo.Modelo_Veiculo_idTipo_automoveis = Tipo_Veiculo.IdTipo_automoveis INNER JOIN Usuarios ON Descricao_veiculo.Usuarios_idUsuarios = Usuarios.IdUsuario WHERE IdDescricao_veiculo=$codigo");
					
					$result=mysql_query($sql) or die (mysql_error());
					While( $tbl =mysql_fetch_assoc($result))
	            	{
		                $codigo  = $tbl["IdDescricao_veiculo"];
		                $placa   = $tbl["Placa"];
		                $ano     = $tbl["Ano"];
		                $modelo  = $tbl['Modelo'];
		                $obs     = $tbl['Obs_Descricao'];
		                $marca   = $tbl['Marca'];
		                $tipo    = $tbl['Tipo_Veiculo'];
		                $usuario = $tbl['Usuario'];
		                echo"<tr>";
		                echo "<td class='campos'>$codigo</td>";
		                echo "<td class='campos'>$placa</td>";
		                echo "<td class='campos'>$ano</td>";
		                echo "<td class='campos'>$modelo</td>";
		                echo "<td class='campos'>$obs</td>";
		                echo "<td class='campos'>$marca</td>";
		                echo "<td class='campos'>$tipo</td>";
		                echo "<td class='campos'>$usuario</td>";
		                echo"</tr>";
	            	}
				?>
			</table>
			<div>
			<?php echo "<form method='POST' action='inserecadastro.php?id=8&codigo=$codigo'>";?>
				<fieldset>
					<label ><h3 align="center">Editar Veiculo</h3></label>
					<br><label>Placa:    <input type="text" name="Placa"></label>
                    <br><label>Ano:     <input type="number" name="Ano"></label>
                    <br><label>Modelo:<input type="text" name="Modelo"></label>
                    <br>Marcas:  <select name="marca">
                    <option selected>Selecione...</option>
                    <?	
                    	$sql=("SELECT * FROM Marcas ORDER BY Marca");
    					$marca=mysql_query($sql);

                        while($opmarca=mysql_fetch_assoc($marca)){
                         
                         echo"<option value=".$opmarca['IdMarcas'] . ">" . $opmarca['Marca'] . "</option>";
                        
                        }
                    ?>
                        </select>
                        <br><label>Tipo:     </label><select name="tipo" id="selecttipo">
                        <option selected>Selecione...</option>
                        
                        <?php

                        	$sql=("SELECT * FROM Tipo_Veiculo ORDER BY Tipo_Veiculo");
    						$tipo=mysql_query($sql);

                            while($opitem=mysql_fetch_assoc($tipo)){
                                
                                echo"<option value=".$opitem['IdTipo_automoveis'] . ">" . $opitem['Tipo_Veiculo'] ."</option>";                            
                            }
                        ?>
                    
                    </select> 
                    <br><label>Observações:<br><textarea cols="40" rows="6" name="obs"></textarea></label>
                    <br><input type="submit" value="Alterar" name="enviar">
                    <input type="reset" value="Limpar Campos">
				</fieldset>
			</form>
			</div>
		
		<?php
			}
			if($status==4)
			{
		?>
		<div class="editor">
			<table>
				<tr>
					<td colspan="2" class="titulotabela"><h3>Usuario</h3></td>
				</tr>
				<tr>
					<td class="infotabela">Codigo</td>
					<td class="infotabela">Usuario</td>
				</tr>
				<?php

					$sql=("SELECT * FROM Usuarios WHERE IdUsuario=$codigo");
					$result=mysql_query($sql) or die (mysql_error());
					While( $tbl =mysql_fetch_assoc($result))
	            	{
		                $codigo    = $tbl["IdUsuario"];
		                $usuario      = $tbl["Usuario"];
		                echo"<tr>";
		                echo "<td class='campos'>$codigo</td>";
		                echo "<td class='campos'>$usuario</td>";
		                echo"</tr>";
	            	}
				?>
			</table>
			<div>
			<?php echo"	<form method='POST' action='inserecadastro.php?id=5&codigo=$codigo'>";?>
				<fieldset>
					<label ><h3 align="center">Editar Senha</h3></label>
					<label>Senha antiga: <input type="password" name="senhaant"></label>
					<br><label>Nova Senha:  <input type="password" name="novasenha"></label>
					<br><label>Confirmar Nova Senha<input type="password" name="Confimasenha"></label><br>
					<input type="submit" name="enviar" value="Alterar"><input type="reset" value="Limpar Conteudo">
				</fieldset>
			</form>
			</div>
			</div>
			<?php
				}
			?>
		</div>
	</body> 
	</html>   