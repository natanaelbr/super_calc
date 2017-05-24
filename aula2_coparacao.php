<?
	function calcular($n1, $n2, $op) {
		if($op =="+"){
			$result = $n1 + $n2;
		}
		if($op =="-"){
			$result = $n1 - $n2;
		}
		if($op =="*"){
			$result = $n1 * $n2;
		}
		if($op =="/"){
			$result = $n1 / $n2;
		}

		return $result;
	}

?>


<html>
	<head>
		<title>Minha primeira página PHP</title>
		<meta charset="UTF-8">
		<style type="text/css">
			body {
				background: gray;
			}
			.vermelho {
				color: red;
				font-size: 20px;
			}
			.azul {
				color: blue;
				font-size: 20px;
			}
		</style>
	</head>
	
	<body>
			<form method="GET">
				Número 1: <input type="text" name="num1"><br>
				Número 2: <input type="text" name="num2"><br>
				<input type="radio" value="+" name="op">Somar 
				<input type="radio" value="-" name="op">Subtrair
				<input type="radio" value="*" name="op">Multiplicar
				<input type="radio" value="/" name="op">Dividir<br>

				<input type="submit" value="Somar">
			</form>
		<?	


			$num1 = $_GET['num1'];
			$num2 = $_GET['num2'];
			$op = $_GET['op'];
			$resultado = calcular($num1, $num2,$op);


			echo "O Resultado da operação é: ";
			if($resultado >= 0){
				echo "<span class='azul'>".$resultado."</span>";
			} else {
				echo "<span class='vermelho'>".$resultado."</span>";
			}
		?>
	</body>
</html>
