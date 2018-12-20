<?php
	$a = 5; $b = 15; $c = 3; $d = 0;
	$soma = $a + $d;
	$divisao = $b / $c;

	if($soma > $divisao) {
		echo "O resultado da soma eh <b>maior</b> que o resultado da divisão!";
	} else if($soma == $divisao) {
		echo "O resultado da soma eh <b>igual</b> ao resultado da divisão!";
	} else {
		echo "O resultado da soma eh <b>menor</b> que o resultado da divisão!";
	}

?>