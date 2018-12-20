<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Atividade 05</title>
	</head>

	<body>

		<form name="form_at05" method="GET">
			
			<input type="text" name="nota1">
			<input type="text" name="nota2">
			<input type="text" name="nota3">
			<input type="text" name="nota4">
			<input type="submit" value="Calcule Média">
		</form>
		<?php
			if($_GET) {

				$nota1 = $_GET['nota1'];
				$nota2 = $_GET['nota2'];
				$nota3 = $_GET['nota3'];
				$nota4 = $_GET['nota4'];

				$soma = $nota1 + $nota2 + $nota3 + $nota4;
				$media = $soma / 4.0;

				if($media >= 7.0) {
					echo "<br/> Média: " .$media. " | <b>Passado</b>!";
				} else if($media >= 5.0 && $media < 7.0) {
					echo "<br/> Média: " .$media. " | <b>Recuperação</b>!";
				} else {
					echo "<br/> Média: " .$media. " | <b>Reprovado</b>!";
				}
			}
		?>
	</body>
</html>