<?php
include_once("../Formulario_Projeto/user_exemple-03.php");

$nome = filter_input(INPUT_POST,"nome",FILTER_SANITIZE_STRIPPED);
$sobrename = filter_input(INPUT_POST, "sobrenome",FILTER_SANITIZE_STRIPPED);
$rg = filter_input(INPUT_POST, "rg", FILTER_VALIDATE_INT);
$cpf = filter_input(INPUT_POST, "cpf", FILTER_VALIDATE_INT);

$filter = array('nome' => FILTER_SANITIZE_STRIPPED,
                'sobrenome' => FILTER_SANITIZE_STRIPPED,
                'rg' => FILTER_VALIDATE_INT,
                'cpf' => FILTER_VALIDATE_INT,
                'senha' => FILTER_VALIDATE_INT,
                'users' => FILTER_SANITIZE_STRING
               );

$val = filter_input_array(INPUT_POST, $filter);

echo "<br>";

if(in_array(false, $val)):
    echo Exceptions::alert0();
else:
    
    echo "Cadastro realizado com sucesso!";

endif;

