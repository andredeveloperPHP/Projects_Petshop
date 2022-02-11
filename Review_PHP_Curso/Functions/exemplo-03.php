<?php
//trabalhando com functions:

class conta {

    protected int $numero;

    public function __construct($num)
    {
        $this->numero = $num;
        
    }

    public function getRetorna()
    {
        return $this->numero;
    }
    

    public static function Somar($a)
    {
        $a += 100;

        return $a;

    }
    
}

$objeto = new conta(10);
$array = array();
array_push($array,$objeto->getRetorna());

//echo json_encode($array);
echo "<br>";
$armazenar = conta::Somar($objeto->getRetorna());
$array2 = array();  //array vazio;
array_push($array2, $armazenar);
echo "<hr>";
echo "<br>";

echo json_encode($array2);









?>