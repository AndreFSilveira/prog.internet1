<?php
   $tipo_cadastro = $_GET['t'];


   if ($tipo_cadastro == 1){
      echo 
      '<div style="border:1px solid #ccc; backgroud:#f3f3f3;">
         Cadastro de Clientes
      </div>';
   }elseif ($tipo_cadastro == 2){
      echo 
      '<div style="border:1px solid #ccc; backgroud:#f3f3f3;">
         Cadastro de Marcas

         <table width="100%" cellpadding="0" cellspacing="0">
            <tr>
               <td>Marca</td>
            </tr>
            <tr>
               <td>Outra coisa</td>
            </tr>
         </table>
      </div>';
   }else{
      echo 'Pow cara ... passe um link com passagem de variavel "t" exemplo xxxx?t=1';
   }
?> 
