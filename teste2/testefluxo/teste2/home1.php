<?php
   Require_once('funcoes.php');  
   session_start();    
   if(!isset($_SESSION['usuario'])){

        header("location: login.php");
   }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Pagina Principal</title>
        </head>
 <body>
    <?php
        homepage();
    ?>
    </body>
</html>
