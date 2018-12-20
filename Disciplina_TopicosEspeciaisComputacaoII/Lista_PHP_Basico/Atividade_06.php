<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Atividade 06</title>
	</head>
	
	<body>
		<form name="form_at06" method="GET">
			Valor da Gasolina: <input type="text" name="gasolina"><br>
			Valor do Álcool: <input type="text" name="alcool"><br>
			<input type="submit" value="Comparar">
		</form>

		<?php
			if($_GET) {
				$gasolina = $_GET['gasolina'];
				$alcool   = $_GET['alcool'];

				if($gasolina > $alcool) {
					echo "<b>Abasteça com Álcool!</b><br>";
				} else {
					echo "<b>Abasteça com Gasolina!</b><br>";
				}

				if($gasolina * 0.7 > $alcool) {
					echo "<b>Abasteça com Álcool (2)!</b>";
				} else {
					echo "<b>Abasteça com Gasolina!(2)</b>";
				}
			}
		?>
	</body>
</html>