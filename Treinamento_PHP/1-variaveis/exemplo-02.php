<?php
//Tipos de Dados no PHP, conhecendo os tipos de dados:
//Padrão CamelCase
$ano_Nascimento = 1990;

$nome_Completo = "Andre Panizza dos Santos";

$nome1 = "andrezinho";

$sobrenome = "Panizza";

$nome_completo = $nome1 ." ". $sobrenome;

//caracteres especiais o unico que e aceitavél e o Underline;

echo "<hr>";

//comentarios Tipos:

// 
/**
 * Bloco de codigo de comentario!
 * O comentario ignora o tipo de codigo;
 */

//Como eu apago uma variavel:

//unset($nome1);

echo $nome1;

echo "<br><br>";

//limpando a variavel:
//unset($nome1);
//comandos de validação:
if(isset($nome1)):
    echo "<b>". $nome1 . "</b>";
endif;

echo "<br><br>";

//validando a variavel se ela existe ou esta definida
if(isset($nome_completo)):
    echo "" . $nome_completo . "<br>";
endif;

echo "<hr>";
exit();



?>