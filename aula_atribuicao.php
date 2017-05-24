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
			$resultado = 5;
			$resultado = $resultado + $num1;
			
			echo "O resultado: ";
			echo $resultado;
		?>
	</body>
</html>
