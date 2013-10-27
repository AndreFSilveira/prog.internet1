<?php
Function conexao(){//realiza coneção com o banco de dados
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
Function inserir($sql){//verifica se a inserçao de um ite ocorreu corretamente
	if(mysql_query($sql)){
		return TRUE;
	}
	else{
		return FALSE;
	}

}

function verificaconexao(){
    session_start();
    if(!isset($_SESSION['usuario'])){

        header("location: login.php");
    }
}

Function homepage(){//chma os elementos da home page para outras paginas ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Pagina do Administrador</title>

        <link rel="stylesheet" href="development-bundle/themes/base/jquery.ui.all.css">
        <script src="development-bundle/jquery-1.8.3.js"></script>
        <script src="development-bundle/ui/jquery.ui.core.js"></script>
        <script src="development-bundle/ui/jquery.ui.widget.js"></script>
        <script src="development-bundle/ui/jquery.ui.accordion.js"></script>
        <script src="js/application.js"></script>
        <link rel="stylesheet" type="text/css" href="moldes.css">
            
       <script>
          $(function() {
        
              $( "#accordion" ).accordion();
        
          });
       </script>
 <body>
    <div id="cabecalho">
        <?php
            $secao_usuario	= $_SESSION['usuario'];
    
         echo "<b>Bem vindo</b>:  $secao_usuario "; ?>
        <div id="sair"><a href="?Sair">Sair</a></div>
        <?php if(isset($_REQUEST['Sair'])){
            session_destroy();
            header("location: login.php");
        }
        ?>
    </div>
    <div id="pagina">

    <div id="accordion">
       <h3>Cadastrar novo</h3>
            <ul>
                <li><a href="cadastrar.php?dado=1" name="cadastro_marca">Nova Marca</a></li>
                <li><a href="cadastrar.php?dado=2" name="cadastro_tipo">Novo Tipo</a></li>
                <li><a href="cadastrar.php?dado=3" name="cadastro_veiculo">Veiculos</a></li>
            </ul>
        <h3>Listar</h3>
            <ul>
                <li><a href="listar.php?id=1" name="listar_tipo">Tipos</a></li>
                <li><a href="listar.php?id=2" name="listar_marcas">Marcas</a></li>
                <li><a href="listar.php?id=3" name="listar_veiculos">Veiculos</a></li>
            </ul>
        <h3>Administrativo</h3>
            <ul>
                <li><a href="admin.php?ad=1" name="admin_marca">Listar Usuaios</a></li>
                <li><a href="admin.php?ad=2" name="admin_veiculo">Cadastrar Novo Usuario</a></li>
            </ul>
        <h3>Sair</h3>
            <ul>
                <li><a href="?Sair">Sair</a></li>
            </ul>
    </div>
    </div>
    </body>
</html>

<?php
	}
    function validasenha($key1,$key2){
        if($key1 == $key2){
            return true;
        }
        return false;


    }
    function validaemail($email){


    }
?>
