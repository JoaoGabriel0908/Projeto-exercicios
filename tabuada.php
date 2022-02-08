<?php
// Import do arquivo de configurações
require_once('./MODULOS/config.php');

require_once('./modulos/calculos.php');

// Declaração de variaveis
$tabuada = (int) 0;
$multiplicadorMax = (int) 0;
$contador = (int) 0;
$resultado = (int) 0;

// Validando o botão calcular
if (isset($_POST['btnCalc'])) {

    // Recebendo os dados do formulário
    $tabuada = $_POST['txtn1'];
    $multiplicadorMax = $_POST['txtn2'];

    // Validando caixa vazia
    if ($_POST['txtn1'] == "" || $_POST['txtn2'] == "")
        echo (ERRO_MSG_CAIXA_VAZIA);
    else {

        // Validação de tratamento para a entrada de strings ao invés de números
        if (!is_numeric($tabuada) || !is_numeric($multiplicadorMax))
            echo (ERRO_MSG_CARACTER_INVALIDO_TEXTO);
        else {

            if($tabuada == 0 || $multiplicadorMax == 0)
                echo (ERRO_MSG_TABUADA_ZERO);
            else
            // Realizando a multiplicação
            $resultado = multiplicar($tabuada, $multiplicadorMax, $contador);
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/tabuada.css">
    <title>Document</title>
</head>

<body>
    <section id="form">
        <form name="frmTabuada" action="tabuada.php" method="POST">
            <div>
                <h1>Numerador: <input type="text" name="txtn1" value="<?=$tabuada?>"></h1>
            </div>
            <div>
                <h1>Contador:<input type="text" name="txtn2" value="<?=$multiplicadorMax?>"></h1>
            </div>
            <div>
                <input type="submit" name="btnCalc" value="Calcular">
                <div id="botaoReset">
                    <a href="tabuada.php">
                        <input type="submit" name="reset" value="Novo cálculo">
                    </a>
                </div>
            </div>
        </form>
    </section>
    <footer id="resultado">
        <?= $resultado; ?>
    </footer>
</body>

</html>