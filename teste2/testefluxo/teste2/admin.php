<?php
    Require_once('funcoes.php');
    $num=$_GET['ad'];

    session_start();
    if(!isset($_SESSION['usuario'])){
            header("location: login.php");
    }
        
    conexao();

    $sql=("SELECT * FROM Usuarios");
    $usuario=mysql_query($sql);
?>
    
   <!DOCTYPE html>
	<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Adiministrativo</title>

        <style type="text/css">
        fieldset{
		    border-style: outset;
		    border-color: black;
		    border: 1px;
		    width:40%;
		    position: absolute;
		    margin-top: 9.8%;
		    margin-left: 48%;
		    white-space:pre;
		}
		img{
			width: 30px;
			height: 30px;
		}
		#formulario1{
			float: left;
			margin-top: 7%;
			
		}
		#formulario2{
			width: 50%;
			height: 70%;
			margin-left: 50%;
			/*margin-top: -38px;
			margin-left: 50%;*/
			
		}
		#botao{
			width: 50%;
			height: 20%;
			margin-left: 15%;
			/*margin-top: -70px;
			margin-bottom: -30px;*/
		

		}
        </style>
    </head>
    
    <body>


        
    <?php
        homepage();
    	if($num==1){
    ?>
		<div id="lista_usuario">
			<table id="ListUsuario">
				<tr>
					<td class="titulotabela" colspan="5" align="center" ><h3>Tabela De Usuarios</h3></td>
				</tr>
				<tr>
					<td class="infotabela" align="center"><b>CODIGO</b></td>
					<td class="infotabela" align="center"><b>USUARIO</b></td>
					<td class="infotabela" align="center"><b>EMAIL</b></td>
					<td class="infotabela" align="center"><b>MUDAR SENHA</b></td>
					<td class="infotabela" align="center"><b>EXCLUIR</b></td>
				</tr>
				<?php
					while ($tbl=mysql_fetch_assoc($usuario)){
						
						$codigo  = $tbl['IdUsuario'];
						$cadastro= $tbl['Usuario'];
						$email   = $tbl['Email'];


						echo "<tr>";
						echo "<td class='campos' >$codigo</td>";
						echo "<td class='campos' >$cadastro</td>";
						echo "<td class='campos' >$email</td>";
						echo "<td class='campos' ><a href='editar.php?ed=4&codigo=$codigo'><img id='img1' alt='Alterar Senha' src='imagens/senha.png'</a></td>";
						echo "<td class='campos' ><a href='excluir.php?ex=4&codigo=$codigo'><img id='img2' alt='Excluir' src='imagens/excluir.jpg'</a></td>";
						echo "</tr>";
                    }
				?>
			</table>
		</div>
	<?php
		}
		if($num==2)
		{
	?>
		<div id="cadastrar">
			<form method="POST" action="inserecadastro.php?id=4">
				<fieldset>
					<b>Cadastrar Usuario</b>
					<div id="formulario1">
						<br>NOME:<br><input type="text" name="usuario">
						<br>SENHA:<br><input type="password" name="senha">
					</div>
					<div id="formulario2">
						<br>EMAL:<br><input type="text" name="email">
						<br>CONFIRMA SENHA:<br><input type="password" name="senha2">
					</div>
					<div id="botao">
						<br><input class="botao1" type="submit" name="enviar" value="CADASTRAR"><input class="botao2" type="reset" value="LIMPAR">
					</div>
				</fieldset>
		</div>
	<?php
		}
	?>

    </div>
	</body>
</html>