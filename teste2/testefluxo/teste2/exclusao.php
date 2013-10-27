<?php
    Require_once('funcoes.php'); 
    $num =$_GET['id'];
    $cod =$_GET['codigo'];

    verificaconexao();
    conexao();
    homepage();
//Deleta o tipo de Veiculo se o mesmo não tem nenhuma ligação com os veiculos cadastrados
    if($num == 1)
      {
  
        $sql=("DELETE FROM mydb.Tipo_Veiculo WHERE Tipo_Veiculo.IdTipo_automoveis = $cod");
        $verifica=mysql_query($sql);
        if(!$verifica)
        {
            echo "<div id='mensagem'>Erro ao excluir Tipo, Este Tipo está ligado a um ou varios cadastros de veiculos ";
            echo "e não pode ser Excluido, Altere estes registros com outro Tipo ou exclua o/os regitros inseridos com este Tipo!</div>";
        }
        else
        {
            
            echo "<div id='mensagem'>Tipo Excluido Com Sucesso!</div>";
        }   
    }
//Deleta a marca Caso não Tenha nenhuma ligação com os veiculos ja cadastrados, caso tenha ligaão não podera ser excluida
    if($num == 2)      {
  
        $sql=("DELETE FROM mydb.Marcas WHERE Marcas.IdMarcas = $cod");
        $verifica=mysql_query($sql);
        if(!$verifica)
        {
            echo "<div id='mensagem'>Erro ao excluir Marca, Esta Marca está ligado a um ou varios cadastros de veiculos ";
            echo "e não pode ser Excluida, Altere estes registros com outra Marca ou exclua os regitros cadastrados com esta Marca!</div>";
        }
        else
        {
            
            echo "<div id='mensagem'>Marca Excluida Com Sucesso!</div>";
        }   
    }

//Deleta o ou os Veiculos cadastrados
    
    if($num == 3)      {
  
        $sql=("DELETE FROM mydb.Descricao_veiculo WHERE Descricao_veiculo.IdDescricao_veiculo = $cod");
        $verifica=mysql_query($sql);
        if(!$verifica)
        {
            echo "<div id='mensagem'>Erro ao excluir Veiculo ".mysql_error()."</div>";
        }
        else
        {
            
            echo "<div id='mensagem'>Veiculo Excluido Com Sucesso!</div>";
        }   
    }


    if($num == 4)//verifica se a variavel $num recebeu algum valor caso sim quer dizer que ja foi acionado o botao de excluir e esta função abaixo exclui o usuario
      {
  
    	$sql=("DELETE FROM mydb.Usuarios WHERE Usuarios.IdUsuario = $cod");
    	$verifica=mysql_query($sql);
    	if(!$verifica)
    	{
    		echo "<div id='mensagem'>Erro ao excluir cadastro, Este Usuario está ligado a um ou varios cadastros de veiculos ";
    		echo "e não pode ser Excluido, Altere estes registros com outro Usuario ou exclua o regitro inserido por este usuario!</div>";
    	}
    	else
    	{
    		
    		echo "<div id='mensagem'>Cadastro Excluido Com Sucesso!</div>";
    	}	
    }
?>