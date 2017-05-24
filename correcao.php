<?
	function acertos($perguntas, $acertos){
		$porcentagem = (100 * $acertos) / $perguntas;

		return $porcentagem;
	}

	function erros($perguntas, $acertos){
		$erros = $perguntas - $acertos;
		$porcentagem = (100 * $erros) / $perguntas;

		return $porcentagem;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Questão 08</title>
	<meta charset="utf-8">
	<style type="text/css">
		body {
			margin: 0;
		}
	</style>
</head>
<body>
<strong>08) Crie um programa em PHP que resolva o seguinte problema: Em um concurso de perguntas e respostas, um jovem acertou 85 das 120 perguntas apresentadas. Qual foi a porcentagem de acertos? E a porcentagem de erros?

<form>
	Número de perguntas: <input type="text" name="perguntas" value="<? echo $_GET['perguntas']; ?>"><br>
	Número de acertos: <input type="text" name="acertos" value="<? echo $_GET['acertos']; ?>">
	<input type="submit" value="Calcular">
</form>
<br></strong>
<?
	$perguntas = $_GET['perguntas'];
	$respostas = $_GET['acertos'];

	echo "Porcentagem de acertos: ". acertos($perguntas,$respostas);
	echo "<br>";
	echo "Porcentagem de erros: ". erros($perguntas,$respostas);


?>
</body>
</html>