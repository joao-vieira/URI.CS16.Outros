<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Atividade 09</title>
	</head>
	
	<body>
		<center>
			<h4>Digite um valor:</h4>
			<form name="form_at08" method="GET">
				<input type="number" name="valor">
				<input type="submit" value="OK">
			</form>
			
			<?php
				if ($_GET) {
					$valor = $_GET['valor'];

					$total = $valor;
					for ($i=$valor - 1; $i >= 1; $i--) { 
						$total *= $i; 
					}
					echo "<br/><br/> Fatorial: " .$total;
				}
			?>
		</center>
	</body>
</html>