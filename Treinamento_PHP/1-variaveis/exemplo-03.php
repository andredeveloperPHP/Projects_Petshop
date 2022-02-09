<?php
//Tipos de dados Primitivos no PHP
//Tipos Basicos de dados:

$nome = "hcode"; 
$site = 'www.hcode.com.br';
$ano = 1990;
$salario = 5500.99;
$bloqueado = false;
//////////////////////////////////////////////////////////////////////////////////////////

//Tipos Compostos:
$frutas = array("abacaxi","laranja","manga","baana","Limão");
//echo $frutas[2];

$nascimento = new DateTime();
//var_dump($nascimento);
//////////////////////////////////////////////////////////////////////////////////////////
//Dados Especiais:

$arquivo = fopen("exemplo-03.php","r");
var_dump($arquivo);

$nulo = NULL;
$nulo1 = null;



?>