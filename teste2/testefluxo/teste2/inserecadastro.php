<?php
    Require_once('funcoes.php'); 
    $num=$_GET['id'];
    $codigo=$_GET['codigo'];

    verificaconexao();
    homepage();
    conexao();
/*************************Cadastro de Marca********************/
    if($num==1)
    {
        $nome=$_POST['Nome_Marca'];
        $obs =$_POST['Obs_marca'];

        $sql=("INSERT INTO Marcas VALUES ('','$nome','$obs')");
        $result=mysql_query($sql);

        if(!$result)
        {
            ?><div id="mensagem"><?php
            echo "Erro ao cadastrar<br>".mysql_error();
            ?></div><?php
        }
        else
        {
            ?><div id="mensagem"><?php
            echo "Cadastro Efetuado com Sucesso<br> ";
            ?></div><?php
        }

    }
/******************** Cadastro de Tipo ***********************/    
    if($num==2)
    {
        $nome=$_POST['nome_tipo'];
        $obs =$_POST['obs'];

        $sql=("INSERT INTO Tipo_Veiculo VALUES ('','$nome','$obs')");
        $result=mysql_query($sql);
        if(!$result)
        {
            ?><div id="mensagem"><?php
            echo "Erro ao cadastrar<br>".mysql_error();
            ?></div><?php
        }
        else
        {
            ?><div id="mensagem"><?php
            echo "Cadastro Efetuado com Sucesso<br> ";
            ?></div><?php
        }

    }
    if($num==3)
 /**************************Cadastro de Veiculos************************/       
    {
        $placa  =$_POST['Placa'];
        $ano    =$_POST['Ano'];
        $modelo =$_POST['Modelo'];
        $marca  =$_POST['marca'];
        $tipo   =$_POST['tipo'];
        $obs    =$_POST['obs'];
        
        $id = $_SESSION['id'];
        echo "$id";

        $sql=("INSERT INTO Descricao_veiculo Values ('','$placa','$ano','$modelo','$obs','$marca','$tipo','$id')");
        $result=mysql_query($sql);
        
        if(!$result)
        {
            ?><div id="mensagem"><?php
            echo "Erro ao cadastrar<br>".mysql_error();
            ?></div><?php
        }
        else
        {
            ?><div id="mensagem"><?php
            echo "Veiculo Cadastrado com Sucesso<br> ";
            ?></div><?php
        }       
    }
/*****************************Cadastro de Usuarios ***********************/    
    if($num==4)
    {
        $usuario=$_POST['usuario'];
        $email  =$_POST['email'];
        $senha  =$_POST['senha'];
        $senha2 =$_POST['senha2'];

            $sql=("INSERT INTO Usuarios VALUES ('','$usuario','$email','$senha')");

            $result=mysql_query($sql);
            if(!$result)
            {
                ?><div id="mensagem"><?php
                echo "Erro ao cadastrar<br>".mysql_error();
                ?></div><?php
            }
            else
            {
                ?><div id="mensagem"><?php
                echo "Cadastro Efetuado com Sucesso<br> ";
                ?></div><?php
            }
         
    }





/*************************Alteração*************************/
/****Alteração de Senha Usuario*******/

    if($num == 5){
        $senhaantiga=$_POST['senhaant'];
        $senhanova  =$_POST['novasenha'];
        $confirmacao=$_POST['Confimasenha'];
        $sql=("SELECT * FROM Usuarios WHERE IdUsuario = $codigo");
        $qry=mysql_query($sql)or die(mysql_error());
        while ($dado=mysql_fetch_assoc($qry)){
            
            $password= $dado['Senha'];
            $user    = $dado['Usuario'];
            $id      = $dado['IdUsuario'];      
        }
        
        if($senhanova == $confirmacao){
            if($senhaantiga == $password){
                $sql=("UPDATE  mydb.Usuarios SET  Senha = $senhanova WHERE  Usuarios.IdUsuario = $codigo");
                if(inserir($sql)){
                    echo "<span id='mensagem'>Senha Atualizada com Sucesso</span>";
                }
                else{
                    echo "<span id='mensagem'>Erro Senha NÃO Atualizada</span>".mysql_error();
                }
            }
            else{
                echo "<spna id='mensagem'>A Senha Atual não Confere com a Existente!</mensagem>";
            }

        }
        else{
            echo "<span id='mensagem'>A Nova Senha e A Confirmação Não Conferem</span>";
        }

    }

/********************Alterar Tipo ************************/

    if ($num==6){
        $tipo =$_POST['alteranome'];
        $obs   =$_POST['obs'];

        if ($tipo=='')
        {
            $sql=("UPDATE  mydb.Tipo_Veiculo SET  Obs_Veiculo = '$obs' WHERE  Tipo_Veiculo.IdTipo_automoveis = $codigo");
            if(inserir($sql)){
                 echo "<div id='mensagem'>Tipo Alterado com Sucesso</div>";
            }
            else
            {
                 echo "<div id='mensagem'>Erro Tipo NÃO Atualizado</div>";
                 echo "<br><br><br><br>".mysql_error();
            }

        }
        elseif ($obs=='')
        {
            $sql=("UPDATE  mydb.Tipo_Veiculo SET  Tipo_Veiculo = '$tipo' WHERE  Tipo_Veiculo.IdTipo_automoveis = $codigo");
            if(inserir($sql)){
                 echo "<div id='mensagem'>Tipo Alterado com Sucesso</div>";
            }
            else
            {
                 echo "<div id='mensagem'>Erro Tipo NÃO Atualizado</div>";
                 echo "<br><br><br><br>".mysql_error();
            }
            
        }
        else
        {
            $sql=("UPDATE  mydb.Tipo_Veiculo SET  Tipo_Veiculo = '$tipo', Obs_Veiculo = '$obs' WHERE  Tipo_Veiculo.IdTipo_automoveis = $codigo");
            if(inserir($sql)){
                 echo "<div id='mensagem'>Tipo Alterado com Sucesso</div>";
            }
            else
            {
                 echo "<div id='mensagem'>Erro Tipo NÃO Atualizado</div>";
                 echo "<br><br><br><br>".mysql_error();
            }
        }
    }
/*******************Altera Marca ***************************/
    if ($num==7)
    {
        $marca =$_POST['alteranome'];
        $obs   =$_POST['obs'];
        

        if ($marca=='')
        {
            $sql=("UPDATE  mydb.Marcas SET  Obs_marcas = '$obs' WHERE  Marcas.IdMarcas = $codigo");
            if(inserir($sql)){
                 echo "<div id='mensagem'>Observação de Marca Alterada com Sucesso</div>";
            }
            else
            {
                 echo "<div id='mensagem'>Erro Observação NÃO Atualizada</div>";
                 echo "<br>".mysql_error()."</div>";
            }

        }
        elseif ($obs=='')
        {
                $sql=("UPDATE  mydb.Marcas SET  Marca = '$marca' WHERE  Marcas.IdMarcas = $codigo");
            if(inserir($sql)){
                 echo "<div id='mensagem'>Marca Alterada com Sucesso</div>";
            }
            else
            {
                 echo "<div id='mensagem'>Erro Marca NÃO Atualizado";
                 echo "<br>".mysql_error()."</div>";
            }
        }
        else    
        {
            $sql=("UPDATE  mydb.Marcas SET  Marca = '$marca', Obs_marcas = '$obs' WHERE  Marcas.IdMarcas = $codigo");
            if(inserir($sql)){
                 echo "<div id='mensagem'>Marca Alterada com Sucesso</div>";
            }
            else
            {
                 echo "<div id='mensagem'>Erro Marca NÃO Atualizado";
                 echo "<br>".mysql_error()."</div>";
            }
        }   
    }

/****************** Alteração de Veiculos ******************************/
    if($num == 8)
    {
        $placa  =$_POST['Placa'];
        $ano    =$_POST['Ano'];
        $modelo =$_POST['Modelo'];
        $marca  =$_POST['marca'];
        $tipo   =$_POST['tipo'];
        $obs    =$_POST['obs'];
        $id     =$_SESSION['id'];
        
        $sql=("UPDATE mydb.Descricao_veiculo Set Placa='$placa' , Ano=$ano, Modelo='$modelo', Obs_Descricao='$obs', Marcas_IdMarcas= $marca, Modelo_Veiculo_idTipo_automoveis= $tipo, Usuarios_idUsuarios = $id WHERE IdDescricao_veiculo = $codigo");
        if(inserir($sql)){
            echo "<div id='mensagem'> Veiculo Alterado com Sucesso!</div>";
        }
        else
        {
            echo "<div id='mensagem'> Veiculo NÃO alterado<br>".mysql_error()."</div>";
        }
    }    

?>
