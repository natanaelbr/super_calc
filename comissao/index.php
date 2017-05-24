<?

	$valor = "";
	$comissao = "";
	$v_comissao = 0;

	if(isset($_GET['acao']) == 'calcular') {
		$valor = $_GET['valor'];
		$comissao = $_GET['comissao'];

		$v_comissao = ($valor * $comissao) / 100;
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Calculo Comissões</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>

	<div class="quadro">
		<h1>Cálculo de Comissão</h1>
		<p>Digite os valores abaixo (apenas números).</p>
		<hr>
		<form>
			<label>Valor(R$):</label> <input type="text" name="valor" 
			value="<?= $valor; ?>" placeholder="Digite o Valor em R$"><br>
			
			<label>Comissão(%):</label> <input type="text" name="comissao" 
			value="<?=$comissao; ?>" placeholder="Digite o valor da comissão em %"><br>
			<input type="hidden" name="acao" value="calcular">
			<button type="submit">Calcular</button>
		</form>
	</div>

	<div class="r r7">
		Valor da Comissão R$: <?=number_format($v_comissao, 2, ",",".");?><br>
		Valor (Venda-Comissão) R$:<?=number_format(($valor - $v_comissao), 2, ",",".");?>


	</div>
</body>
</html>