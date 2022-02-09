<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
<?php
include_once("../Formulario_Projeto/user_exemple-02.php");
class Exceptions {

    public static function alert0()
    {

       try{
           throw new Exception("Os campos não foram todos Preenchidos!", 400);

       }catch (Exception $e) {
            echo strtoupper("<b> Mensagem de Erro: </b>") . $e->getMessage();
        }
      
    }
}
?>
<br><br> 
<a href="./user_exemple-01.php"> Voltar a Pagina Inicial </a>
<br>       
    </body>
    </html>

