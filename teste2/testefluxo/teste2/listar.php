<?php
     Require_once('funcoes.php');
    $num=$_GET['id'];

    verificaconexao();        
    conexao();


    $sql=("SELECT * FROM Tipo_Veiculo Order BY Tipo_Veiculo");
    $dadostipo=mysql_query($sql);
    $sql=("SELECT * FROM Marcas ORDER BY Marca");
    $dadosmarca=mysql_query($sql);
    $sql=("SELECT * FROM Descricao_veiculo INNER JOIN Marcas ON Descricao_veiculo.Marcas_idMarcas = Marcas.idMarcas INNER JOIN Tipo_Veiculo ON Descricao_veiculo.Modelo_Veiculo_idTipo_automoveis = Tipo_Veiculo.IdTipo_automoveis INNER JOIN Usuarios ON Descricao_veiculo.Usuarios_idUsuarios = Usuarios.IdUsuario ORDER BY Modelo");
    $dadosveiculo=mysql_query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Listar</title>
        <style type="text/css">
            img{
                width:30px ; 
                height:30px;
            }
        </style>
    </head>
    
    <body>


        
        <div calss="lista">
        <?php
            homepage(); 
            if($num==1)
            {    
           
        ?>    
        <table id="tipo">
            <tr >
                <td class="titulotabela" colspan="5" align="center"><h2>Tabela de Tipos</h2></td>
            </tr>
            <tr>
                <td class="infotabela" align="center"><b>Codigo</b></td>
                <td class="infotabela" align="center"><b>Tipo</b></td>
                <td class="infotabela" align="center"><b>Obs Tipo</b></td>
                <td class="infotabela" align="center"><b>Editar</b></td>
                <td class="infotabela" align="center"><b>Excluir</b></td>
            </tr>
            <?
            While( $tbl =mysql_fetch_assoc($dadostipo))
            {
                $codigo    = $tbl["IdTipo_automoveis"];
                $tipo      = $tbl["Tipo_Veiculo"];
                $ob_tipo   = $tbl["Obs_Veiculo"];
                echo"<tr>";
                echo "<td class='campos'>$codigo</td>";
                echo "<td class='campos'>$tipo</td>";
                echo "<td class='campos'>$ob_tipo</td>";
                echo "<td class='campos'><a href='editar.php?ed=1&codigo=$codigo'><img alt='Editar'src='imagens/editar.png'</a></td>";
                echo "<td class='campos'><a href='excluir.php?ex=1&codigo=$codigo'><img alt='Excluir' src='imagens/excluir.jpg'</a></td>";
                echo"</tr>";
            }
            ?>
            
        </table>
        <?php  
            }
        ?>
        <?php 
            if($num==2)
            {
        ?>    
        <table id="marcas">
            <tr >
                <td class="titulotabela" colspan="5"><h3>Tabela de Marcas</h3></td>
            </tr>
            <tr>
                <td class="infotabela"><b>Codigo</b></td>
                <td class="infotabela"><b>Fabricante</b></td>
                <td class="infotabela"><b>Obs Fabricante</b></td>
                <td class="infotabela"><b>Editar</b></td>
                <td class="infotabela"><b>Excluir</b></td>
            </tr>

            <?
            While( $tbl =mysql_fetch_assoc($dadosmarca))
            {
                $codigo    = $tbl["IdMarcas"];
                $marca     = $tbl["Marca"];
                $ob_marca  = $tbl["Obs_marcas"];
                
                echo "<tr>";
                echo "<td class='campos'>$codigo</td>";
                echo "<td class='campos'>$marca</td>";
                echo "<td class='campos'>$ob_marca</td>";
                echo "<td class='campos'><a href='editar.php?ed=2&codigo=$codigo'><img alt='Editar'src='imagens/editar.png'</a></td>";
                echo "<td class='campos'><a href='excluir.php?ex=2&codigo=$codigo'><img alt='Excluir' src='imagens/excluir.jpg'</a></td>";
                echo"</tr>";
            }
            ?>
        </table>
        <?php  
            }
        ?>
        <?php 
            if($num==3)
            {    
        ?>
        <div id="pesquisa">
        <form>
            <fieldset>
                <label id="pesquisaveiculo"><b>Filtro de Pesquisas</b></label><br>
                <br>Modelo:<input type="text" name="modelo">
                Marca:<select name="marca">
                    <option selected>Seleceione</option>
                <?php    
                    while($opmarca=mysql_fetch_assoc($dadosmarca)){
                         
                         echo"<option value=".$opmarca['IdMarcas'] . ">". $opmarca['Marca'] . "</option>";
                        
                        }
                ?>
                </select>
                Tipo:<select name="tipo">
                    <option selected>Seleceione</option>
                <?php    
                    while($optipo=mysql_fetch_assoc($dadostipo)){
                         
                         echo"<option value=".$optipo['IdTipo_automoveis'] . ">". $optipo['Tipo_Veiculo'] . "</option>";
                        
                        }
                ?>
                </select>
                <input type="submit" href="#" value="Pesquisar">
            </fieldset>
        </form>
        </div>
        <div id="resultado"></div>    
        <table id="veiculos">
            <tr >
                <td class="titulotabela" colspan="10"><h3>Tabela de Veículos</h3></td>
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
                <td class="infotabela">Editar</td>
                <td class="infotabela">Excluir</td>
            </tr>

            <?
            While( $tbl =mysql_fetch_assoc($dadosveiculo))
            {
                
                $codigo    = $tbl["IdDescricao_veiculo"];
                $placa     = $tbl["Placa"];
                $ano       = $tbl["Ano"];
                $modelo    = $tbl["Modelo"];
                $ob_descr  = $tbl["Obs_Descricao"];
                $marca     = $tbl["Marca"];
                $tipoauto  = $tbl["Tipo_Veiculo"];
                $usuario   = $tbl["Usuario"];
                

                echo "<tr>";
                echo "<td class='campos'>$codigo</td>";
                echo "<td class='campos'>$placa</td>";
                echo "<td class='campos'>$ano</td>";
                echo "<td class='campos'>$modelo</td>";
                echo "<td class='campos'>$ob_descr</td>";
                echo "<td class='campos'>$marca</td>";
                echo "<td class='campos'>$tipoauto</td>";
                echo "<td class='campos'>$usuario</td>";
                echo "<td class='campos'><a href='editar.php?ed=3&codigo=$codigo'><img alt='Editar'src='imagens/editar.png'</a></td>";
                echo "<td class='campos'><a href='excluir.php?ex=3&codigo=$codigo'><img alt='Excluir' src='imagens/excluir.jpg'</a></td>";
                echo "</tr>";

            }
            ?>
        </table>
        <?php  
            }
        ?>

        </div>
    </body>
</html>