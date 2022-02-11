<?php

/***************************
 * OBJETIVO desde arquivo de funções matemáticas que poderá ser utilizado dentro do projeto
 * AUTOR: João Gabriel 
 * DATA: 04/02/2022
 * VERSÃO: 1.0
 * *************************/

function operacaoMatematica($numero1, $numero2, $operacao)
{
    // Declaração de variaveis locais da função (todas as variaveis recebem os dados 
    // do parametro ou argumento da function)

    $num1 = (float) $numero1;
    $num2 = (float) $numero2;
    $tipoCalculo = (string) $operacao;
    $result = (float) 0;

    // Processamento do calculo das operações				
    switch ($tipoCalculo) {
        case ('SOMAR'):
            $result = $num1 + $num2;
            break;
        case ('SUBTRAIR'):
            $result = $num1 - $num2;
            break;
        case ('MULTIPLICAR'):
            $result = $num1 * $num2;
            break;
        case ('DIVIDIR'):
            if ($num2 == 0)
                echo (ERRO_MSG_DIVISAO_ZERO);
            else
                $result = $num1 / $num2;
            break;
    }
    //ROUND() e NUMBER_FORMAT() - permite ajustar a quantidade de casas decimais realizando o arredondamento 
    //$resultado = round($resultado, 2);
    $result = number_format($result, 2);

    return $result;
}
// Função para a tabuada
function multiplicar($numerador, $multiplicador)
{
    // Declaração das variaveis
    $num1 = (int) $numerador;
    $num2 = (int) $multiplicador;
    $contador = (int) 0;
    $result = (int) 0;
    $resultado = (string) null;

    while ($contador <= $num2) {
        $result = $num1 * $contador;
        $resultado = $resultado . ("$num1 X $contador = " . ("$result") . '<br/>');
        $contador++;
    }
    return $resultado;
}
// Função para números Pares ou Ímpares
function par($numero1, $numero2)
{
    // Declaração de variaveis
    $num1 = (int) $numero1;
    $num2 = (int) $numero2;
    $result = (int) 0;

    // Função para encontrar os números pares e ímpares
    while ($num1 <= $num2) {
        if ($num1 % 2 == 0) {
            $result = $result . (' Resultado é par ' . $num1 . '' . '<br/>');
        }
        $num1 += 1;
    }
    return $result;
}
// Função para calcular os números ímpares
function impar($numero1, $numero2)
{
    // Declaração das variaveis
    $num1 = (int) $numero1;
    $num2 = (int) $numero2;
    $result = (int) 0;

    while ($num1 <= $num2) {
        if($num1 % 2 ==1){
            $result = $result . ('Resultado é ímpar' . $num1 . '' . '<br/>');
        }
        $num1 += 1;
    }
    return $result;
}
// Função para calcular as médias
function calcularMedia($numero1, $numero2, $numero3, $numero4, $media)
{
    // Declaração das variaveis
    $num1 = (int) $numero1;
    $num2 = (int) $numero2;
    $num3 = (int) $numero3;
    $num4 = (int) $numero4;
    $media = (int) 0;

    // Realizando calculo da média
    $media = ($num1 + $num2 + $num3 + $num4) / 4;

    return $media;
}
