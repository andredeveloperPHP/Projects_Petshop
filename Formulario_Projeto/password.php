<?php
$senha = "12345678";
$options = [
    'cost' => 13 ];
$senhaSegura = password_hash($senha, PASSWORD_DEFAULT, $options);
$senha_db = '$2y$13$wmtWkoTcFfQRLEXukuBgZOdDU74tQn2XPVX3RaZUea02QJ8jP6SoW';

if(password_verify($senha, $senha_db)):
    echo "senha Valida";
else:
    echo "senha invalida";
endif;

echo $senhaSegura;


?>