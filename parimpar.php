<?php

require_once('modulos/config.php');

$num1 = (int) 0;
$num2 = (int) 0;
$resultado = (int) 0;

// Verificando se o botão foi clicado
if (isset($_POST['btnCalc'])) {

    $inicial = $_POST['sltInicial'];
    $final = $_POST['sltFinal'];

    // Validando se o número inicial é maior que o final
    if ($inicial < $final) {

        // Função para encontrar os números pares e ímpares
        while ($inicial <= $final) {
            if ($inicial % 2 == 0) {
                echo (' Resultado é par ' . $inicial . '');
                $inicial += 1;
            } elseif ($inicial % 2 == 1) {
                echo (' Resultado é ímpar ' . $inicial . '');
                $inicial += 1;
            }
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
</head>

<body>
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
    </section>
    <footer id="resultado">
    <?= $resultado; ?>        
    </footer>
</body>

</html>