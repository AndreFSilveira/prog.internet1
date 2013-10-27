<?php
    Require_once('funcoes.php'); 
    $valor=$_GET['dado'];

   verificaconexao();

    conexao();
    
    $sql=("SELECT * FROM Marcas ORDER BY Marca");
    $marca=mysql_query($sql);
    $sql=("SELECT * FROM Tipo_Veiculo ORDER BY Tipo_Veiculo");
    $tipo=mysql_query($sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Cadastro</title>

    </head>
    
    <body>
        
            <?php
                homepage();
 /***********************Cadastrar marca**************************/                
                if($valor==1)
                {
            ?>

        <div class="cadastro">
            <form action="inserecadastro.php?id=1" method="POST" name="Cadastrar_marca">
                <fieldset>
                    <label><h3>Cadastrar Marca</h3></label>
                    <br><label>Nome Marca: <input type="text" maxlength="45" name="Nome_Marca" ></label>
                    <br><label>Observaçoes:<br><textarea cols="40" rows="6" name="Obs_marca"></textarea></label>
                    <br><input class="botao1" type="submit" name="enviar" value="Cadastrar">
                    <input class="botao2" type="reset" value="Limpar Campos">
                </fieldset>
            </form>
        </div>
        </div>
        
        <?php
          }
 /***************************Cadastrar tipo ***********************************/          
          if($valor==2)
          {
        ?>

        <div class="cadastro">
            <form action="inserecadastro.php?id=2" method="POST" name="cadastrar_tipo">
                <fieldset>
                    <label><h3>Cadastrar Tipo</h3></label>
                    <br><label>Tipo:<input type="text" maxlength="45" name="nome_tipo"></label>
                    <br><label>Observaçoes:<br><textarea cols="40" rows="6" name="obs"></textarea></label>
                    <br><input class="botao1" type="submit" name="enviar" value="Cadastrar">
                    <input class="botao2" type="reset" value="Limpar Campos">
                </fieldset>
            </form>
        </div>
        <?
            }
/*********************************Cadastrar Veiculo *************************************/
            if($valor==3) 
            {
        ?>
        <div class="cadastro">
            <form action="inserecadastro.php?id=3" name="cadastrar_veiculo" method="POST">
                <fieldset>
                    <label><h3>Cadastrar veiculo</h3></label>
                    <br><label>Placa:    <input type="text" name="Placa"></label>
                    <br><label>Ano:     <input type="number" name="Ano"></label>
                    <br><label>Modelo:<input type="text" name="Modelo"></label>
                    <br>Marcas:  <select name="marca">
                    <option selected>Selecione...</option>
                    <?

                        while($opmarca=mysql_fetch_assoc($marca)){
                         
                         echo"<option value=".$opmarca['IdMarcas'] . ">" . $opmarca['Marca'] . "</option>";
                        
                        }
                    ?>
                        </select>
                        <br><label>Tipo:     </label><select name="tipo" id="selecttipo">
                        <option selected>Selecione...</option>
                        
                        <?php

                            while($opitem=mysql_fetch_assoc($tipo)){
                                
                                echo"<option value=".$opitem['IdTipo_automoveis'] . ">" . $opitem['Tipo_Veiculo'] ."</option>";                            
                            }
                        ?>
                    
                    </select> 
                    <br><label>Observações:<br><textarea cols="40" rows="6" name="obs"></textarea></label>
                    <br><input class="botao1" type="submit" value="Cadastrar" name="enviar">
                    <input class="botao2" type="reset" value="Limpar Campos">
                    <?
                        }
                    ?>
                </fieldset>
            </form>
        </div>
        </div>
    </body>
</html>