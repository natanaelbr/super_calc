<?
$carros = array(
array('id' => '1', 'modelo' => 'Corsa',	'placa' => 'PCA-2341'),
array('id' => '2', 'modelo' => 'Gol',	'placa' => 'AWC-1233'),
array('id' => '3', 'modelo' => 'Palio',	'placa' => 'HDD-7439')
);

echo "<table border='1'>";
    foreach ($carros as $value) {
    echo "<tr><td>" . $value['id'] . "</td>";
    echo "<td>" . $value['modelo'] . "</td>";
    echo "<td>" . $value['placa'] . "</td></tr>";
    }
echo "</table>";


?>