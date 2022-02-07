<?php
// Import do arquivo de configurações
require_once('./MODULOS/config.php');

// Declaração de variaveis
$tabuada = (int) 0;
$multiplicadorMax = (int) 0;
$contador = (int) 0;
$resultado = (string) null;

// Validando o botão calcular
if (isset($_POST['btnCalc'])) 
{
    // Recebendo os dados do formulário
    $tabuada = $_POST['txtn1'];
    $multiplicadorMax = $_POST['txtn2'];

    // Validando caixa vazia
    if ($_POST['txtn1'] == "" || $_POST['txtn2'] == "")
        echo (ERRO_MSG_CAIXA_VAZIA);
    else {

        // Validando se há ou não números nas caixas
        if (!is_numeric($tabuada) || !is_numeric($multiplicadorMax))
				echo (ERRO_MSG_CARACTER_INVALIDO_TEXTO);
			else {

        // Realizando a multiplicação
        while ($contador <= $multiplicadorMax) {
            echo ("$tabuada X $contador = " . ($tabuada * $contador));
            echo "<br>";
            $contador++;
        }
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <section id="form">
        <form name="frmTabuada" action="tabuada.php" method="POST">
            <div>
                <h1>Numerador: <input type="text" name="txtn1" value=""></h1>
            </div>
            <div>
                <h1>Contador:<input type="text" name="txtn2" value=""></h1>
            </div>
            <div>
                <input type="submit" name="btnCalc" value="Calcular">
                <div id="botaoReset">
                    <a href="tabuada.php">
                        Novo Cálculo
                    </a>
                </div>
            </div>
        </form>
    </section>
    <footer id="resultado">

    </footer>
</body>

</html>