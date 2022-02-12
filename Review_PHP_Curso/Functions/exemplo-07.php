<?php

//funções anonimas
/*
function test($callback)
{
    $callback();

}


test(function()
{
    echo "O processo terminou do video";

}
);
*/

$fn = function($a){

    var_dump($a);
}


$fn('oi');


?>