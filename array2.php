<?
$carros = array(
				array('1','Corsa','PCA-2341'),
				array('2','Gol','AWC-1233'),
				array('1','Corsa','PCA-2341'),
				array('2','Gol','AWC-1233'),
				array('1','Corsa','PCA-2341'),
				array('2','Gol','AWC-1233'),
				array('1','Corsa','PCA-2341'),
				array('2','Gol','AWC-1233'),
				array('1','Corsa','PCA-2341'),
				array('2','Gol','AWC-1233'),
				array('1','Corsa','PCA-2341'),
				array('2','Gol','AWC-1233'),
				array('1','Corsa','PCA-2341'),
				array('2','Gol','AWC-1233'),
				array('1','Corsa','PCA-2341'),
				array('2','Gol','AWC-1233'),
				array('1','Corsa','PCA-2341'),
				array('2','Gol','AWC-1233'),
				array('1','Corsa','PCA-2341'),
				array('2','Gol','AWC-1233'),
				array('1','Corsa','PCA-2341'),
				array('2','Gol','AWC-1233'),
				array('3','Palio','HDD-7439')
			);

echo "<table border='1'>";
    foreach ($carros as $value) {
    echo "<tr><td>" . $value[0] . "</td>";
    echo "<td>" . $value[1] . "</td>";
    echo "<td>" . $value[2] . "</td></tr>";
    }
echo "</table>";

?>