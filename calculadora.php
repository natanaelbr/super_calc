<?php
// Desenvolvida por Sergio Toews
// Email: sergiowsk07@gmail.com
?>

<html>
<head>
<title>Calculadora Simples</title>
<style type = "text/css">
<!--
.font1 {
font-family: verdana;
font-size: 12px;
color: #000000;
}
-->
.font2 {
font-family: verdana;
font-size: 12px;
color:#0066FF;
}
-->
.font3 {
font-family: verdana;
font-size: 10px;
font-weight: bold;
color:#006600;
}
-->
.font4 {
font-family: verdana;
font-size: 10px;
color:#000000;
}
-->
</style>
</head>

<body>
<table width="350" height="75" border="1" cellpadding="0" cellspacing="0" bordercolor="#006600">
  <tr>
    <td><form name="calculadora" method="post" action="calculadora.php">
      <div align="center"><span class="font3">Calculadora Simples em PHP</span> <br>
      </div>
      <table width="325" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td><input name="valor1" type="text" class="font1" id="valor1" size="5">            </td>
          <td><select name="calculo" size="1" class="font4" id="calculo">
            <option value="+">Adi&ccedil;&atilde;o</option>
            <option value="-">Subtra&ccedil;&atilde;o</option>
            <option value="*">Multiplica&ccedil;&atilde;o</option>
            <option value="/">Divis&atilde;o</option>
          </select></td>
          <td><input name="valor2" type="text" class="font1" id="valor2" size="5"></td>
          <td><input name="Submit" type="submit" class="font1" value="  Calcular  "></td>
        </tr>
      </table>
    </form></td>
  </tr>
</table>
<br>
<table width="350" height="50" border="1" cellpadding="0" cellspacing="0" bordercolor="#006600">
  <tr>
    <td><table width="325" border="0" align="center" cellpadding="0" cellspacing="0" class="font1">
      <tr>
        <td class="font1">
		<?php
		$valor1 = $_POST["valor1"];
		$valor2 = $_POST["valor2"];
		$calculo = $_POST["calculo"];
		
		if($calculo == '+'){
			$resultado = $valor1 + $valor2;
			}
		if($calculo == '-'){
			$resultado = $valor1 - $valor2;
			}
		if($calculo == '*'){
			$resultado = $valor1 * $valor2;
			}
		if($calculo == '/'){
			$resultado = $valor1 / $valor2;
			}
		?>		</td>
      </tr>
      <tr>
        <td align = "center">O resultado é: <b><? print number_format($resultado, 2) ?></b></td>
      </tr>
    </table></td>
  </tr>
</table>
<p class="font1"><span class="font4">Para alterar a quantidade de casa decimais no resultado basta alterar o n&uacute;mero
  em<br>
</span><span class="font4">number_format.</span> <span class="font3">Ex.: &lt;? print number_format($resultado, 2) ?&gt;</span> <span class="font4">Este reproduzira
  o <br>
  formato acima</span> <span class="font3">0.00</span><span class="font4">.
  </span> </p>
</body>
</html>
