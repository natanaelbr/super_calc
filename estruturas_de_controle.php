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
	$a = 20;
	$b = 20;
	if($a > $b) {
		echo "A é maior que B.";
	} else if ($a == $b) {
		echo "A é igual que B.";
	} else {
		echo "A é menor que B.";
	}
?>
<h2>Swith / Case</h2>
<?
	$a = 30;
	$b = 30;
	switch($a) {
		case($a == $b) : {
			echo "A é igual a B.";
			break;
		}
		case($a > $b) : {
			echo "A é maior que B.";
			break;	
		}
		case($a < $b) : {
			echo "A é menor que B.";
			break;
		}
		default : {
			echo "Me perdi!";
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