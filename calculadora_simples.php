<?php
// Para fazer importação de arquivos

/* Include ou require - Permite fazer a importaçâo de arquivos no PHP
 Uitlizando a opção _once, o servidor realiza uma restrição 
 para importar somente uma vez o arquivo */

// Include()
// Include_once()

// Require()
// Require_once()

// Import do arquivo de configurações de variáveis e constantes
require_once('modulos/config.php');

// Import do arquivo funções para cálculos matemáticos
require_once('modulos/calculos.php');

// Declaração de variáveis
$valor1 = (float) 0;
$valor2 = (float) 0;
$resultado = (float) 0;
$opcao = (string) null;

/* 
		GETTYPE() = Permite verificar qual o tipo de dados de uma variável
		SETTYPE() = Permite modificar o tipo de dados de uma variável
		
		Exemplos de variável que nasce do tipo inteiro e depois
		e convertida

		$nome = true;
		gettype($nome);
		settype($nome, "String");
		echo(gettype($nome));

		strtoupper() = Permite converter o texto para MAIÚSCULO
		strtolower() = Permite converter o texto para minúscula
	*/

// Validação para verificar se o botão foi clicado
if (isset($_POST['btncalc'])) {
	// Recebe os dados do formulário
	$valor1 = $_POST['txtn1'];
	$valor2 = $_POST['txtn2'];

	// Validação de tratamento de erro para caixa vazia
	if ($_POST['txtn1'] == "" || $_POST['txtn2'] == "")
		echo (ERRO_MSG_CAIXA_VAZIA);
	else {

		// Validação de tratamento de erro para RÁDIO sem escolha
		if (!isset($_POST['rdocalc']))
			echo (ERRO_MSG_OPERACAO_CALCULO);
		else {
			// Validação de tratamento para a entrada de strings ao invés de números
			if (!is_numeric($valor1) || !is_numeric($valor2))
				echo (ERRO_MSG_CARACTER_INVALIDO_TEXTO);
			else {

				// Apenas podemos receber o valor do RÁDIO se ele existir
				$opcao = strtoupper($_POST['rdocalc']);

				// Chamada da função de calculos matemáticos, passamos os valores e o
				// tipo da operação recebemos o valor do resultado
				$resultado = operacaoMatematica($valor1, $valor2, $opcao);
			}
		}
	}
}
?>
<html>

<head>
	<title>Calculadora - Simples</title>
	<link rel="stylesheet" type="text/css" href="css/calculadora.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Sora:wght@600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/main.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Serif:wght@300&display=swap" rel="stylesheet">
</head>

<body>
	<header>
		<nav class="menu">
			<div class="texto">
				<h1></h1>
				<a class="titulo">Calculadora Simples</a>
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
	<div id="form">
		<form name="frmcalculadora" method="post" action="calculadora_simples.php">
			<div class="valores">
				<p>Valor 1:</p>
				<input type="text" name="txtn1" class="txt" value="<?= $valor1 ?>">
				<p>Valor 2:</p>
				<input type="text" name="txtn2" class="txt" value="<?= $valor2 ?>">	
			</div>
			<div id="container_opcoes">
			<h1 class="escolha">Escolha a operação do cálculo</h1>
				<p><input type="radio" name="rdocalc" value="somar" <?= $opcao == 'SOMAR' ? 'checked' : null; ?>>Somar <br></p>
				<p><input type="radio" name="rdocalc" value="subtrair" <?= $opcao == 'SUBTRAIR' ? 'checked' : null; ?>>Subtrair <br></p>
				<p><input type="radio" name="rdocalc" value="multiplicar" <?= $opcao == 'MULTIPLICAR' ? 'checked' : null; ?>>Multiplicar <br></p>
				<p><input type="radio" name="rdocalc" value="dividir" <?= $opcao == 'DIVIDIR' ? 'checked' : null; ?>>Dividir <br></p>

				<input type="submit" name="btncalc" value="Calcular" class="button">
			</div>
			<div id="resultado">
				<?= $resultado; ?>
			</div>

		</form>
	</div>

	</div>


</body>

</html>