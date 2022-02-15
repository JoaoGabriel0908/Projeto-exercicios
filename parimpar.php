<?php

require_once('modulos/config.php');

require_once('./modulos/calculos.php');

$inicial = (int) 0;
$final = (int) 0;
$resultadoPar = (int) 0;
$resultadoImpar = (int) 0;

// Verificando se o botão foi clicado
if (isset($_POST['btnCalc'])) {

    $inicial = $_POST['sltInicial'];
    $final = $_POST['sltFinal'];

    // Validando se o número inicial é maior que o final
    if ($inicial < $final) {

        if ($_POST['sltInicial'] == "" || $_POST['sltFinal'] == "")
            echo (ERRO_MSG_CAIXA_VAZIA);
        else {
            $resultadoPar = par($inicial, $final);
            $resultadoImpar = impar($inicial, $final);
        }
    } else
        echo (ERRO_MSG_INICIAL_MAIOR);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/parimpar.css">
</head>

<body>
    <header>
        <nav class="menu">
            <div class="texto">
                <h1></h1>
                <a class="titulo">Pares e Ímpares</a>
                <img src="imgs/calculadora (2).png" alt="">
                </h1>
            </div>
            <div class="container">
                <input type="checkbox" id="checkbox-menu">
                <label for="checkbox-menu">
                    <span class="line1"></span>
                    <span class="line2"></span>
                    <span class="line3"></span>
                </label>
                <ul class="dropdown-menu" id="dropdown-menu">
                    <li class="list">
                        <a href="index.html">
                            <img src="imgs/casinha-de-cachorro (1).png" alt="">
                        </a>
                    </li>
                    <li class="list">
                        <a href="calculadora_simples.php">
                            <img src="imgs/calculadora (2).png" alt="">
                        </a>
                    </li>
                    <li class="list">
                        <a href="media.php">
                            <img src="imgs/divisao.png" alt="">
                        </a>
                    </li>
                    <li class="list">
                        <a href="tabuada.php">
                            <img src="imgs/multiplicacao (1).png" alt="">
                        </a>
                    </li>
                    <li class="list">
                        <a href="parimpar.php">
                            <img src="imgs/vitoria.png" alt="">
                            <img src="imgs/toque.png" alt="">
                        </a>
                    </li>
                </ul>
        </nav>
    </header>
    <section id="form">
        <form name="frmTabuada" action="parimpar.php" method="POST">
            <div>
                <select name="sltInicial" id="">
                    <option value="selected">
                        <h1>Selecione o número inicial</h1>
                    </option>
                    <?php
                    $num1 = 0;
                    while ($num1 <= 500) {
                        echo ('<option value="' . $num1 . '">' . $num1 . '</option>');
                        $num1++;
                    }
                    ?>
                </select>
            </div>
            <div>
                <select name="sltFinal" id="">
                    <option value="selected">
                        <h1>Selecione o número final</h1>
                    </option>
                    <?php
                    $num2 = 100;
                    while ($num2 <= 1000) {
                        echo ('<option value="' . $num2 . '">' . $num2 . '</option>');
                        $num2 += 1;
                    }
                    ?>

                </select>
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
        <section id="resultado">
            <h1>Resultado Pares</h1><?= $resultadoPar; ?>
            <h1>Resultado Ímpares</h1><?= $resultadoImpar; ?>
        </section>
    </section>
</body>

</html>