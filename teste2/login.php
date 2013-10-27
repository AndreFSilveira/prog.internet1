<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Tela de Login</title>
        <style type="text/css" href="moldes.css"></style>
    </head>
    <body>
        <div>
            <form method="post" nome"loginform">
                <?php
                    echo 'Email: ';
                ?>
                <input type="text" name="email" maxlength="100" /><br>
                <?php
                    echo 'Senha:';
                ?>
                <input type="password" name="senha" maxlength="8">
                <input type="submit" name="entrar">
            </form>
            <? include 'logar.php'; ?>
        </div>
    </body>
    </html>
