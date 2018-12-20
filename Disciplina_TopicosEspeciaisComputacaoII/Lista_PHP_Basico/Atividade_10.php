<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Atividade 10</title>
	</head>
	
	<body>
		<center>
			<h4>Digite dois valores:</h4>
			<form name="form_at08" method="GET">
				<input type="number" name="valor1">
				<input type="number" name="valor2">
				<input type="submit" value="OK">
			</form>
			
			<?php
				if ($_GET) {
					$valor1 = $_GET['valor1'];
					$valor2 = $_GET['valor2'];

					if($valor1 > $valor2) {
						$aux = $valor1;
						$valor1 = $valor2;
						$valor2 = $aux;
					}

					echo "<br/>";
					for ($i=$valor1+1; $i < $valor2; $i++) { 
						echo $i. " ";
					}
				}
			?>
		</center>
	</body>
</html>