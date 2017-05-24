<!DOCTYPE html>
<html>
<head>
	<title>Super Cacl Max</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<?php include "topo.php";?>
	<div class='corpo'>
		<div class='titulo'>Cálculo de IMC</div>
		<p>O Cálculo de IMC refere-se ao valor do Indice de Massa Corporal, é um valor muito utilizado para verificar a qualidade de saúde do individuo.</p>
		<br><br>
		<form method="GET">
			<table align="center">
				<tr>
					<td>Altura:</td>
					<td><input type="text" name="altura" class='input' value="<? if(isset($_GET['altura'])) echo $_GET['altura']; ?>"> mt (1.75)</td>
				<tr>
				<tr>
					<td>Peso:</td>
					<td><input type="text" name="peso" class='input' value="<? if(isset($_GET['peso'])) echo $_GET['peso']; ?>"> kg (80.0)</td>
				<tr>
				<tr>
					<td colspan="2" align="center"><input type="submit" name="submit" value="Calcular" class="botao"></td>
				<tr>

			</table>
			<input type="hidden" name="acao" value="calcular">
		</form>

		<div class="limpar"></div>
	</div>
	<?php
		if(isset($_GET['acao']) == 'calcular') { 
			$altura = $_GET['altura'];
			$peso = $_GET['peso'];

			$imc = number_format($peso / ($altura * $altura),2);
			if($imc < 18.5) {
				$status = "Abaixo do Peso!";
			} else if($imc < 25) {
				$status = "Peso normal!";
			} else if($imc < 30) {
				$status = "Atenção Sobrepeso!";
			} else {
				$status = "Obesidade! Mexa-se!";
			}
			?>
			<div class='resultado'>
				<p>O resultado do cálculo de IMC é:
				<b><?=$imc;?> </b>
				<span><?=$status;?> </span>
				</p>
			</div>
		<? } ?>

	
</body>
</html>