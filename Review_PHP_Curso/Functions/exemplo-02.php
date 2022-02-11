<?php
// passagem de valor por referencia;

//criando um array:

$pessoa = array('nome' => 'joão',
                'idade' => 20 );

foreach($pessoa as &$value):

    if(gettype($value) === 'integer'):
        $value += 10;
    echo "A idade do participante e:" ." " .  $value . "<br>";
    endif;
endforeach;
/////////////////////////////////////////////////////////////////////

$frutas = array('frutas' => 'abacaxi',
                'leguminosa' => 'Vargem_verde',
                'Naturais' => 'Manga');

$adiciona = array('fazenda' => 'Mandioca');

array_push($frutas, $adiciona);
ksort($frutas);

$a = true;
echo "<br>";

while($a == true):
    for($i=0; $i < 1; $i++):
        echo $i . "  " . json_encode($frutas['Naturais']) . "<br>";
        echo "<br>";
        echo $i . "  " . json_encode($adiciona['fazenda'] . "<br>");
    endfor;
    $a = false;
endwhile;

echo "<br>";
echo "<hr>";
exit();

?>