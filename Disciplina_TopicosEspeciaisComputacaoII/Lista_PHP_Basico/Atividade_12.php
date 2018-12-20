<?php
	for ($i=0; $i <= 1000; $i++) { 
		if ($i % 8 == 0) $soma += $i;
	}

	echo "<br/> Soma de todos os valores divisiveis por 8 em um conjunto de 0 a 1000: <br/><br/> -> " .$soma;
?>