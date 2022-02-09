<?php
interface Veiculo {
    //definimos cada um dos padrões:

    public function acelerar($velocidade);
    public function freiar($velocidade);
    public function trocarMarcha($marcha);
 
}

class Civic implements Veiculo {

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

$carro = new Veiculo();



?>