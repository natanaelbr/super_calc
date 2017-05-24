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
		<div class='titulo'>Calculo de Calorias</div>
		<p>O Calculo de calorias para corrida, é feito através da multiplicação da distância percorrida pelo seu peso corporal.</p>
		<br><br>
		<form method="GET">
			<table align="center">
				<tr>
					<td>Km/h:</td>
					<td><input type="text" name="velocidade" class='input' value="<? if(isset($_GET['velocidade'])) echo $_GET['velocidade']; ?>"></td>
				<tr>
				<tr>
					<td>Peso:</td>
					<td><input type="text" name="peso" class='input' value="<? if(isset($_GET['peso'])) echo $_GET['peso']; ?>"></td>
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
			$km = $_GET['velocidade'];
			$peso = $_GET['peso'];

			$calorias = ($km * $peso * 0.0175) * 60;

			?>
			<div class='resultado'>
				<p>O resultado do cálculo de calorias é:
				<b><?=$calorias;?> </b>
				</p>
			</div>
		<? } ?>

	
</body>
</html>