<?php
/*******************************************************************
* OBJETIVO: Arquivo responsável por reunir e padronizar todos as 
* variáveis e constantes que serão utilizadas em todo o projeto
* AUTOR: João Gabriel
* DATA: 04/02/2022
* VERSÃO: 1.0
********************************************************************/

// Constantes do Projeto
// Modo 1 de criar uma constante
define('ERRO_MSG_CAIXA_VAZIA', '<script> alert("Favor preencher todas as caixas!") </script>');

// Modo 2 de criar uma constante
const ERRO_MSG_OPERACAO_CALCULO = '<script> alert("Favor escolher uma operação válida") </script>';
const ERRO_MSG_CARACTER_INVALIDO_TEXTO = '<script> alert("Não é possível realizar calculos com dados não númericos!") </script>';
const ERRO_MSG_DIVISAO_ZERO = '<script> alert("Não é possível realizar uma divisão onde o valor 2 seja igual a 0") </script>';

?>