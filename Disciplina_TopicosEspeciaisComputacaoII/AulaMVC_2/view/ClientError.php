<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Ops, Tivemos Problemas!</title>
	</head>
	<body>
		<h1>Erro:</h1>

		<?php
			if ( isset($_SESSION['error'])) {
				echo $_SESSION['error'];

				unset($_SESSION['error']);
			}

		?>
	</body>
</html>