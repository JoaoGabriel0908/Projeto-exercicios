<?php
/***************************
 * OBJETIVO desde arquivo de funções matemáticas que poderá ser utilizado dentro do projeto
 * AUTOR: João Gabriel 
 * DATA: 04/02/2022
 * VERSÃO: 1.0
 * *************************/ 

function operacaoMatematica($numero1, $numero2, $operacao){
    // Declaração de variaveis locais da função (todas as variaveis recebem os dados 
    // do parametro ou argumento da function)

    $num1 = (double) $numero1;
    $num2 = (double) $numero2;
    $tipoCalculo = (String) $operacao;
    $result = (double) 0;

    // Processamento do calculo das operações				
    switch($tipoCalculo)
    {
        case('SOMAR'):
            $result = $num1 + $num2;
        break;
        case('SUBTRAIR'):
            $result = $num1 - $num2;
        break;
        case('MULTIPLICAR'):
            $result = $num1 * $num2;
        break;
        case('DIVIDIR'):					
            if($num2 == 0)
             echo(ERRO_MSG_DIVISAO_ZERO);
         else
             $result = $num1 / $num2;
        break;
    }
    //ROUND() e NUMBER_FORMAT() - permite ajustar a quantidade de casas decimais realizando o arredondamento 
    //$resultado = round($resultado, 2);
    $result = number_format($result, 2);

    return $result;
}
?>