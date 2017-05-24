<!DOCTYPE html>
<html>
<head>
	<title>Estruturas de Controle</title>
	<meta charset="utf-8">
</head>
<body>

<h1>Estruturas de Controle</h1>
<h2>IF / Else</h2>
<?
	$fruta = "Abacaxi";
	$fluido = "água";
	if(($fruta == "Abacaxi")&&($fluido == "Água")) {
		echo "Oba, vou fazer suco de abacaxi..";
	} else {
		echo "Aff, já era o suco!. Não gosto de suco de ".$fruta;
	}
?>
<h2>Swith / Case</h2>
<?
	$fruta = "Manga";
	switch($fruta) {
		case($fruta == "Abacaxi") : {
				echo "Oba vou fazer suco de: ".$fruta;
			break;
		}
		case($fruta == "Cenoura") : {
			echo "Oba vou fazer suco de: ".$fruta;
			break;	
		}
		case($fruta == "Goiaba") : {
			echo "Oba vou fazer suco de: ".$fruta;
			break;
		}
		default : {
			echo "Aff... Hoje não tem suco! Não gosto de: ".$fruta;
		}
	}	
?>
<h2>For</h2>
<?
	echo "<ul>";
	//for(inicio, condição, incremento)
	for($valor=1; $valor<=100; $valor = $valor+5){
		echo "<li>Minha Lista - Posição ".$valor."</li>";
	}
	echo "</ul>";
?>
<h2>While</h2>
<?
	echo "<ul>";
	$num = 0;
	while($num <= 10) {
		$num++;
		echo "<li>Minha Lista - Posição ".$num."</li>";
	}
	echo "</ul>";
?>
<h2>Do While</h2>
<?
	echo "<ul>";
	$num = 0;
	do{
		$num++;
		echo "<li>Minha Lista - Posição ".$num."</li>";

	} while($num <= 10);
	echo "</ul>";
?>
</body>
</html>