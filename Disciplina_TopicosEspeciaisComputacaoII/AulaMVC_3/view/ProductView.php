<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Cadastro de Produto</title>
	</head>

	<body>
		<center>
			<form name="cadeProduto" method="POST" action="../controller/ProductCtrl.php">
				Descrição do Produto: <input type="text" name="descricao"> <br>
				Código de Referência: <input type="text" name="codReferencia"> <br>
				Marca: <input type="text" name="marca"> <br>

				<input type="reset" value="Limpar">
				<input type="submit" value="Cadastrar">
			</form>
		</center>
	</body>
</html>