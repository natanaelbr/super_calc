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
		<div class='titulo'>Distância</div>
		<p>Texto.</p>
		<br><br>
		<form method="GET">
			<table align="center">
				<tr>
					<td>Valor:</td>
					<td><input type="text" name="valor" class='input' value="<? if(isset($_GET['valor'])) echo $_GET['valor']; ?>">  em Metros</td>
				<tr>
				<tr>
					<td>Para:</td>
					<td>
						<select name="para" class="input">
							<option value="km">Kilometros</option>
							<option value="milhas">Milhas</option>
							<option value="polegadas">Polegadas</option>
							<option value="leguas">Léguas</option>
						</select>

					</td>
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
			$valor = $_GET['valor'];
			$para = $_GET['para'];

			if($para == 'km') {
				$result = $valor * 0.001;
			}
			if($para == 'milhas') {
				$result = $valor * 0.000621371;
			}
			if($para == 'polegadas') {
				$result = $valor * 39.37;
			}
			if($para == 'leguas') {
				$result = $valor / 4200;
			}

			?>
			<div class='resultado'>
				<p>O resultado do cálculo é:
				<b><?=number_format($result,2);?> </b>
				</p>
			</div>
		<? } ?>

	
</body>
</html>