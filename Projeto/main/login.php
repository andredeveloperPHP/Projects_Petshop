<?php
//incluindo o arquivo:

$connection = "conexão";
include_once("config.php");
include_once("$connection.php");
//verificação simples se o campo não for vazio;

$locale = "../index.php";
if(empty($_POST['username']) || empty($_POST['pass'])):
    header("Location:$locale");
    exit();
endif;

$usuario =  mysqli_real_escape_string($conexao ,$_POST['username']); 
$senha = mysqli_real_escape_string($conexao, $_POST['pass']);

//criando a query de conexao:
$query = " SELECT usuario_id, usuario FROM usuario WHERE usuario = '{$usuario}' AND senha = md5('{$senha}')";

$result =  mysqli_query($conexao, $query);
#recebe a nossa conexão e a query montada;
//variavel de linhas:
$row = mysqli_num_rows($result); // retorna 0 ou 1
switch($row):
    case 0:
        $_SESSION['usuario'] = $usuario;
        header('location:../index.php');
    break;
    case 1:
        header('location:../main/main.php');
        
    break;
endswitch;

?>