<?php
//variaveis de conexão:
define('HOST', 'localhost');
define('USUARIO','root');
define('PASSWORD', '');
define('DBNAME','login');
define('PORT','3306');
define('SOCKET', null);

$conexao = mysqli_connect(HOST, USUARIO, PASSWORD, DBNAME, PORT, SOCKET);

if($conexao->connect_error AND $conexao->connect_errno):
    echo "Erro de conexão com o banco de dados" . $conexao->connect_errno . "<br>";
endif;

?>