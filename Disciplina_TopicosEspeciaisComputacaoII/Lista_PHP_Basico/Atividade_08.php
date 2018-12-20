<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Atividade 08</title>
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

					echo "<br/>";
					for ($i=0; $i <= $valor; $i++) { 
						echo $i. " ";
					}
				}
			?>
		</center>
	</body>
</html>