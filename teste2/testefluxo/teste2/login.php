<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Tela de Login</title>
        <link rel="stylesheet" href="moldes.css" type="text/css">
        <style type="text/css">
             body{
                  background-image: url('css/ui-lightness/images/fundo-login.jpg');
            }
        </style>
    </head>
    <body>
        <div id="pagina">
            <div id="login">
                <div id="centro">
                <form method="post" name="loginform" action="" >
                    <?php
                        ?><span id="titulo_login"><b>LOGIN</b></span><?
                        echo '<h2>Email: ';
                    ?>
                    <input type="text" name="email" maxlength="100" /></h2>
                    <?php
                        echo '<h2>Senha:';
                    ?>
                    <input type="password" name="senha" maxlength="8"></h2>
                    <input id="enviar" type="submit" name="entrar" value="   ENTRAR   ">
                    <? include 'logar.php';?>
                </form>
                </div>            
             </div>
        </div>
    </body>
    </html>
