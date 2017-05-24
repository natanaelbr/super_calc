<!DOCTYPE html>
<html>
<head>
	<title>Calculo IMC</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>

	<div class="quadro">
		<h1>Cálculo de Massa Corporal (IMC)</h1>
		<p>Digite os valores abaixo (apenas números).</p>
		<hr>
		<form>
			<label>Peso:</label> <input type="text" name="peso" 
			value="<? if (isset($_GET['peso'])) { echo $_GET['peso']; }; ?>"> kg<br>
			
			<label>Altura:</label> <input type="text" name="altura" 
			value="<?  if (isset($_GET['altura'])) { echo $_GET['altura']; }; ?>"> cm<br>
			<input type="hidden" name="acao" value="calc">
			<button ype="submit">Calcular</button>
		</form>
	</div>
		<?
			if(isset($_GET['acao']) == "calc") {
				$peso = $_GET['peso'];
				$altura = $_GET['altura'];
				if ((is_numeric($peso))AND(is_numeric($altura))) {
					$calc = ($peso / pow($altura,2))*10000;
					$calc = round($calc, 2);
				} else {
					$calc = 0;
				}
			if ($calc != 0 ) {
				switch ($calc) {
					case ($calc < 18.5) : 
							$resultado = "Seu ICM é: ".$calc."<br>"."Você está abaixo do peso.";
							$class = "r1";
					break;
					case (($calc > 18.6) AND ($calc < 24.9)) :
							$resultado = "Seu ICM é: ".$calc."<br>"."Você está com o peso normal.";
							$class = "r2";
					break;
					case (($calc > 25) AND ($calc < 29.9)) :
							$resultado = "Seu ICM é: ".$calc."<br>"."Você está um pouco acima do peso.";
							$class = "r3";
					break;
					case (($calc > 30) AND ($calc < 34.9)) :
							$resultado = "Seu ICM é: ".$calc."<br>"."Você está obeso grau I";
							$class = "r4";
					break;
					case (($calc > 35) AND ($calc < 39.9)) :
							$resultado = "Seu ICM é: ".$calc."<br>"."Você está obeso grau II.";
							$class = "r5";
					break;
					case ($calc > 40) :
							$resultado = "Seu ICM é: ".$calc."<br>"."Você está obeso grau III.";
							$class = "r6";
					break;
					
					default:
							$resultado = "Erro!.";
							$class = "r7";
					break;
				} } else {
						$resultado = "Erro!.";
						$class = "r7";
				}
				echo "<div class='r $class'>".$resultado."</div>";
			}

		?>
	

</body>
</html>