<? 
  $usuario = "joao";
  $senha = "123";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Acessar Sistema</title>
	<meta charset="utf-8">
	<style type="text/css">
		body{
			margin:0;
			font-family: tahoma;
		}
		div{
			border: 2px solid gray;
			background: ligthgray;
			margin: 20px;
			padding: 20px;
		}
		h1{
			margin:0 0 20 0;
			padding:0;
			font-size: 16px;
		}
	</style>
</head>
<body>
	<?
		if($_POST['acao'] != "logar") {
	?>
	<div>
		<form method="POST">
			<h1>Controle de Acesso:</h1>
			Usuário: <input type="text" name="us"><br>
			Senha: <input type="password" name="sh">
			<input type="hidden" name="acao" value="logar">
			<input type="submit" value="Conectar">
		</form>
	</div>

	<?
	} else {
			if(($_POST['us'] == $usuario)&&($_POST['sh']==$senha)) {
				echo "login aceito!";
			} else {
				echo "não foi dessa vez... ";
				echo "<a href='login.php'>Voltar</a>";
			}

		}
	?>
</body>
</html>