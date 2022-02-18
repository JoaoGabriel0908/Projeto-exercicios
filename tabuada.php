<?php
// Import do arquivo de configurações
require_once('./MODULOS/config.php');

require_once('./modulos/calculos.php');

// Declaração de variaveis
$tabuada = (int) 0;
$multiplicadorMax = (int) 0;
$contador = (int) 0;
$resultado = (string) null;

// Validando o botão calcular
if (isset($_POST['btnCalc'])) {

    // Recebendo os dados do formulário
    $tabuada = $_POST['txtn1'];
    $multiplicadorMax = $_POST['txtn2'];
    $resultado = "";

    // Validando caixa vazia
    if ($_POST['txtn1'] == "" || $_POST['txtn2'] == "")
        echo (ERRO_MSG_CAIXA_VAZIA);
    else {

        // Validação de tratamento para a entrada de strings ao invés de números
        if (!is_numeric($tabuada) || !is_numeric($multiplicadorMax))
            echo (ERRO_MSG_CARACTER_INVALIDO_TEXTO);
        else {

            // Validação da tabuada acima do 0
            if ($tabuada == 0 || $multiplicadorMax == 0)
                echo (ERRO_MSG_TABUADA_ZERO);
            else
                // Realizando a multiplicação
                $resultado = multiplicar($tabuada, $multiplicadorMax);
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
    <link rel="stylesheet" href="./css/main.css">
    <title>Document</title>
</head>

<body>
    <nav class="menu" id="menu">
        <h1 class="texto">
            <a href="index.html" class="titulo">Tabuada</a>
            <img src="imgs/multiplicacao (1).png" alt="">
        </h1>
        <div class="container">
            <input type="checkbox" id="checkbox-menu">
            <label for="checkbox-menu">
                <span class="line1"></span>
                <span class="line2"></span>
                <span class="line3"></span>
            </label>
            <ul class="dropdown-menu" id="dropdown-menu">
                <li>
                    <a href="index.html">
                        <img src="imgs/casinha-de-cachorro (1).png" alt="">
                    </a>
                </li>
                <li>
                    <a href="calculadora_simples.php">
                        <img src="imgs/calculadora (2).png" alt="">
                    </a>
                </li>
                <li>
                    <a href="media.php">
                        <img src="imgs/divisao.png" alt="">
                    </a>
                </li>
                <li>
                    <a href="tabuada.php">
                        <img src="imgs/multiplicacao (1).png" alt="">
                    </a>
                </li>
                <li>
                    <a href="parimpar.php">
                        <img src="imgs/vitoria.png" alt="">
                        <img src="imgs/toque.png" alt="">
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <div id="form">
        <form name="frmTabuada" action="tabuada.php" method="POST">
            <div id="texto">
                <h1>Tabuado do: <input type="text" name="txtn1" value="<?= $tabuada ?>"></h1>
                <h1>X</h1>
                <h1>Multiplicador: <input type="text" name="txtn2" value="<?= $multiplicadorMax ?>"></h1>
            </div>
            <footer id="resultado">
                <p><?php echo ($resultado); ?></p>
            </footer>
            <div id="botoes">
                <input type="submit" name="btnCalc" value="Calcular">
                <div id="botaoReset">
                    <a href="tabuada.php">
                        <input type="submit" name="reset" value="Novo cálculo">
                    </a>
                </div>
            </div>
        </form>
    </div>
</body>

</html>