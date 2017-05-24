<!DOCTYPE html>
<html>
<head>
	<title>Tabuada (12)</title>
</head>
<body>
	<?
		echo"<table border='1'>";
		for($i=1; $i<=10;$i++) {
			echo "<tr>";
			for($j=1; $j<=10; $j++){
				echo "<td>".($i*$j)."</td>";
			}
			echo "<tr>";
		}
		echo "</table>";
	?>
</body>
</html>