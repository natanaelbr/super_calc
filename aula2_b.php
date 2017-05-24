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
			
		<?	
			$num1 = 10;
			$num2 = 5;
			$resultado = $num1 * $num2;
			
			echo "O resultado de " . $num1 . ' * ' . $num2 . ' é igual a: ' .$resultado;
		?>
	</body>
</html>
