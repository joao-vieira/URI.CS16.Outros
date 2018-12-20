<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Sucesso no Cadastro</title>
	</head>
	
	<body>
		<h1>Resultado:</h1>

		<?php
			if (isset($_SESSION['descricao']) && isset($_SESSION['marca'])) {
				echo "Descrição do Produto: " .$_SESSION['descricao'] . 
					 "<br/>Marca: " .$_SESSION['marca'];

					 unset($_SESSION['descricao']);
					 unset($_SESSION['marca']);
			}
		?>
	</body>
</html>