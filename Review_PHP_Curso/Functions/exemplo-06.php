<?php
//funções recursivas:

$hierarquia = array(
    //Inicio CEO
   array('nome_cargo' => 'CEO',
         'subordinados'=>array(

             //Inicio: Diretor Comercial
             array('nome_cargo' => 'Diretor Comercial',
                    'subordinados'=>array(

                        //Inicio: Gerente de Vendas
                        array('nome_cargo' => 'Gerente de Vendas')
                    )
                ), //Termino: Diretor Comercial
                //Inicio: Diretor financeiro
                array(
                    'nome_cargo' => 'Diretor Financeiro',
                    'subordinados'=>array(
                        //Inicio Gerente de Contas a pagar
                        array(
                            'nome_cargo' => 'Gerente de Contas a Pagar',
                            'subordinados'=>array(
                                
                            )

                        )
                        //Termino Gerente de contas a Pagar
                    )
                
                )
                //Termino: Diretor Financeiro

         )
    ) //Termino CEO
);
    


?>