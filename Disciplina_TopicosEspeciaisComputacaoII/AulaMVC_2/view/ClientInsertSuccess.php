<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Cadastro Realizado com Sucesso</title>
	</head>
	
	<body>
		<h1> Resultado:</h1>

		<?php
			if (isset($_SESSION['name']) && isset($_SESSION['cpf']) && isset($_SESSION['email'])) {
				echo "<br> Usuário: ". $_SESSION['name'] .
					 "<br> CPF: ". $_SESSION['cpf'] . 
					 "<br> Email: ". $_SESSION['email'];

				unset($_SESSION['name']);
				unset($_SESSION['cpf']);
				unset($_SESSION['email']);
			}
		?>
	</body>
</html>