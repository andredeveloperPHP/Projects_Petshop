<?php
interface one {
    public function alimentar($velocidade);
    public function mover($velocidade);
}
abstract class exemplo1 implements one {
  
    public function alimentar($velocidade)
    {
        echo "o crocodilo comeu sua presa muito:" . $velocidade . "<br>";
    }
    public function mover($velocidade)
    {
        echo "O crocodilo se move muito" . $velocidade ."<br>";
    }
}

class exemplo2 extends exemplo1 {
    public function alimentar($velocidade)
    {
        //vazio
    }

    public function mover($velocidade)
    {
        //vazio
    }

    public function parar()
    {
        echo "O crocodilo ficou parado";

    }
    public function andar()
    {
        echo "O crocodilo anda";

    }
}
$reptil = new exemplo2();
$reptil->alimentar("lento");
echo "<br>";
$reptil->mover("rapido");
echo "<br>";
$reptil->parar();
echo "<br>";
$reptil->andar();
echo "<hr>";


?>