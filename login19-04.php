<? session_start();
$up = "natanael";
$sp = "102030";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
</head>
<body>
	<? if(isset($_POST['acao']) == "") { ?>
	<form method="POST">
		Usuário:<input type="text" name="us"><br>
		Senha:<input type="password" name="sh"><br>
		<input type="hidden" name="acao" value="Login">
		<input type="submit" name="" value="Conectar">
	</form>

	<?
		} else if(isset($_POST['acao']) == "Login") {
			$us = $_POST['us'];
			$sh = $_POST['sh'];

			if(($us == $up)&&($sh == $sp)) {
				$_SESSION['log'] = $us;
				echo "Seja bem vindo, ".$_SESSION['log']."<br>";
			} else {
				echo "Usuário ou senha inválidos";
				echo "<a href='login.php'>Voltar</a>";
			}
		}
		if(isset($_SESSION['log']) != "") {
			echo "<a href='#'>Calculo IMC</a><br>";
			echo "<a href='#'>Calculo Média</a><br>";
			echo "<a href='#'>Calculo Área</a><br><br>";
			echo "<a href='sair.php'>Sair do Sistema</a><br>";

		}
	?>
</body>
</html>