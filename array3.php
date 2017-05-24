<?php
/* CONSTRUINDO UMA MATRIZ MANUALMENTE
$veiculos[0][0] = 1;
$veiculos[0][1] = 'Carro';
$veiculos[0][2] = 'Gol';
$veiculos[0][3] = '2017';

$veiculos[1][0] = 2;
$veiculos[1][1] = 'Carro';
$veiculos[1][2] = 'Palio';
$veiculos[1][3] = '2011';

$veiculos[2][0] = 3;
$veiculos[2][1] = 'Moto';
$veiculos[2][2] = 'CG';
$veiculos[2][3] = '2015';

*/
$veiculos = array(array(1,'Moto','Biz','2005'),
				  array(2,'Carro','Corolla','2017'),
				  array(3,'Carro','Jetta','2015'),
				  array(4,'Caminhão','Mercedez','2013'),
				  array(5,'Moto','CG','2012'));


for($linha = 0; $linha <= 4; $linha++) {

	for($coluna = 0; $coluna <=3; $coluna++) {
				/* FILTRANDO RESULTADOS
					if($veiculos[$linha][3] >= 2015) {
						echo $veiculos[$linha][$coluna].' ';		
					}
				*/
			echo $veiculos[$linha][$coluna].' ';
	}
	echo '<br>';
}
?>