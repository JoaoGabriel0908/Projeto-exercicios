<?php
require_once('modulos/config.php');

require_once('./modulos/calculos.php');

/* Declaração de váriaveis: 
    Ex: nomesVar = (tipoDados) valorInicial;
    */
$nota1 = (float) 0;
$nota2 = (float) 0;
$nota3 = (float) 0;
$nota4 = (float) 0;
$media = (float) 0;

// Validação para tratar se o botão foi clicado
if (isset($_POST['btncalc'])) {

    // Recebendo dados utilizando POST do formulário
    $nota1 = $_POST['txtn1'];
    $nota2 = $_POST['txtn2'];
    $nota3 = $_POST['txtn3'];
    $nota4 = $_POST['txtn4'];
    
    // Validação de tratamento de erro para caixa vazia
    if ($_POST['txtn1'] == "" || $_POST['txtn2'] == "" || $_POST['txtn3'] == "" || $_POST['txtn4'] == "")
        echo (ERRO_MSG_CAIXA_VAZIA);
    else {

        // Validação de tratamento para a entrada de strings ao invés de números
        if (!is_numeric($nota1) || !is_numeric($nota2) || !is_numeric($nota3) || !is_numeric($nota4))
            echo (ERRO_MSG_CARACTER_INVALIDO_TEXTO);
        else {

            $media = calcularMedia($nota1, $nota2, $nota3, $nota4, $media);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>Média</title>
    <link rel="stylesheet" type="text/css" href="css/media.css">
    <meta charset="utf-8">
</head>

<body>

    <div id="conteudo">
        <header id="titulo">
            Calculo de Médias
        </header>

        <div id="form">
            <form name="frmMedia" method="post" action="media.php">
                <div>
                    <label>Nota 1:</label>
                    <input type="text" name="txtn1" value="<?php echo ($nota1); ?>">
                </div>

                <div>
                    <label>Nota 2:</label>
                    <input type="text" name="txtn2" value="<?php echo ($nota2); ?>">
                </div>

                <div>
                    <label>Nota 3:</label>
                    <input type="text" name="txtn3" value="<?php echo ($nota3); ?>">
                </div>

                <div>
                    <label>Nota 4:</label>
                    <input type="text" name="txtn4" value="<?php echo ($nota4); ?>">
                </div>
                <div>
                    <input type="submit" name="btncalc" value="Calcular">
                    <div id="botaoReset">
                        <a href="media.php">
                            Novo Cálculo
                        </a>
                    </div>
                </div>
            </form>
        </div>
        <footer id="resultado">
            A média é:<?php echo ($media); ?>
        </footer>
    </div>


</body>

</html>