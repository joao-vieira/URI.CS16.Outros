<!DOCTYPE html>
<html>
	<head>
		<title>Atividade 07</title>
		<meta charset="utf-8">
	</head>

	<body>
		<form name="form_at06" method="GET">
			Digite sua altura:<input type="text" name="tamanho"><br><br>
			
			Sexo: <label for="masculino"><input type="radio" name="sexo" id="masculino" value="M"> Masculino </label>&nbsp;&nbsp; 
			<label for="feminino"><input type="radio" name="sexo" id="feminino" value="F"> Feminino </label><br><br>
			
			<input type="submit" value="Calcular IMC">
		</form>

		<?php
			if ($_GET) {
				$altura = $_GET['tamanho'];
				$sexo	= $_GET['sexo'];

				if ($sexo == 'M') {
					$imc = (72.7 * $altura) - 58;
				} else {
					$imc = (62.1 * $altura) - 44;
				}

				echo "<br/><br/><center><b>Seu IMC é: " .$imc. "!<b/></center>";
			}

		?>
	</body>
</html>