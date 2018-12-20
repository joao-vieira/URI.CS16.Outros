<?php
	for ($i=0; $i <= 500; $i++) { 
		if ($i % 5 == 0) echo $i. "   ";
		if ($i % 100 == 0 && $i != 0) echo "<br/>";
	}
?>