<!DOCTYPE html>
<html>
<head>
	<title>Tabuada (12)</title>
</head>
<body>
	<?
		for($i=1; $i<=10;$i++) {
			echo "taboada do: ".$i.".<br>";
			for($j=0; $j<=10; $j++){
				echo $i." x ".$j." = ".($i*$j)."<br>";
			}
			echo "<hr>";
		}

	?>
</body>
</html>