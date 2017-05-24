<!DOCTYPE html>
<html>
<head>
	<title>Bissexto</title>
	<meta charset="utf-8">
</head>
<body>
	<?
		if(isset($_GET['acao']) == "") {
	?>
	<form>
		Ano: <input type="text" name="ano">
		<input type="hidden" name="acao" value="Calcular">
		<input type="submit" name="" value="Calcular">
	</form>
	<? } else {
			$ano = $_GET['ano'];

			if(($ano % 4) == 0) {
				if((($ano % 100) != 0)||(($ano % 400 ) == 0)) {
					echo "Bingo!, $ano, é bissexto!<br>";
				} else {
					echo "Aff!, $ano, é NÃO bissexto!<br>";					
				} 
			} else {
				echo "Aff!, $ano, é NÃO bissexto!<br>";
			}
		echo "<a href='Bissexto.php'>Voltar</a>";
	}
	?>
</body>
</html>