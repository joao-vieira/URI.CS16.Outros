<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	
	<body>
		<h1> Resultado:</h1>

		<?php
			if (isset($_SESSION['user']) && isset($_SESSION['email'])) {
				echo "<br> Usuário: ". $_SESSION['user'] .
					 "<br> Email: ". $_SESSION['email'];

				unset($_SESSION['user']);
				unset($_SESSION['email']);
			}
		?>
	</body>
</html>