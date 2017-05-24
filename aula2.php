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
			<h2>Meu calculo de somar</h2>
			<form>
				1º Número: <input type="textfield" name="num1" value="<? echo $_GET['num1']; ?>"><br>
				2º Número: <input type="textfield" name="num2" value="<? echo $_GET['num2']; ?>"><br>
				<input type="submit" value="Somar Números">
			</form>

		<?	
			$resultado = 0;
			
			$num1 = $_GET['num1'];
			$num2 = $_GET['num2'];
			
			$resultado = $num1 + $num2;
			
			echo "O resultado da soma dos números é: ";
			echo $resultado;
		?>
	</body>
</html>
