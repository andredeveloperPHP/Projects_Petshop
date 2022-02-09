<?php
interface Veiculo {
    //definimos cada um dos padrões:

    public function acelerar($velocidade);
    public function freiar($velocidade);
    public function trocarMarcha($marcha);
 
}

abstract class Automovel implements Veiculo { //classe abstrata

    public function acelerar($velocidade)
    {
        echo "O vaiculo acelerou até:" . $velocidade . "km/h";

    }

    public function freiar($velocidade)
    {
        echo "O veiculo Frenou e Parou a uma velocidade de:" . $velocidade . "km/h";

    }

    public function trocarMarcha($marcha)
    {
        echo "O veiculo trocou para a marcha" . $marcha . "a uma velocidade constante";

    }
    
}


class delRey extends Automovel {

    protected $modelo; 

    public function __construct($model)
    {
        $this->modelo = $model;
        
    }

    public function carName(){

        return $this->modelo;
    }



    public function empurar($veloc_empurra)
    {
        echo "O carro Delrey foi empurrado a uma velocidade de " . $veloc_empurra . "km/h";
                
    }

}

//instanciando o objeto:
$carro = new delRey("Ford Delrey");

$carro->acelerar(200);

echo "<br><br>";
$carro->freiar(100);

echo "<br><br>";

$carro->trocarMarcha(2);
echo "<br><br>";

echo "O meu carro acabou de quebrar meu veiculo:" . $carro->carName() . "e sera empurrado aqui a uma velocidade de:" . $carro->empurar(50) . "<br>";
echo "<hr>";









?>