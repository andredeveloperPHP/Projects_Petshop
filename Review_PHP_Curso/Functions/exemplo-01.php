<?php
//funções pra praticar passagem de valor por referencia de memoria

$a = 10;


function trocaValor(&$b)
{
    $b += 50;

    return $b;

}

//echo $a;

echo trocaValor($a); //60
echo "<br>";
echo trocaValor($a); //60
echo "<br>";
echo $a;  //vale 10, como estou passando o parametro: 50 ele vai somar.


//para fazer passagem de valor por referencia:

//vamos declarar outra function:
echo "<hr>";

$c = 12;

function troca2Valor($num)
{
    $num += 40;

    return $num;

}

echo troca2Valor($c);
echo "<br>";
echo $c;



?>