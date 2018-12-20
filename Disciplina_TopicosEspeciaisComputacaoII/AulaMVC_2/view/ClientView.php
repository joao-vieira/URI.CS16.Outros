<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Cadastro de Clientes</title>
	</head>
	
	<body>
		<form name="cadeClient" method="POST" action="../controller/ClientCtrl.php">
			<b>Digite seu nome completo:</b> <input type="text" name="name"> <br>
			<b>Data de Aniversário:</b> <input type="text" name="dateBirth"> <br>
			<b>CPF:</b> <input type="text" name="cpf"> <br>
			
			<b>Sexo:</b> <label for="feminino"><input type="radio" name="sex" id="feminino" value="F"> Feminino</label>
				  <label for="masculino"><input type="radio" name="sex" id="masculino" value="M"> Masculino</label> <br>

			<b>Profissão:</b> <input type="text" name="profission"> <br>
			<b>Telefone:</b> <input type="text" name="telephone"> <br>
			<b>Celular:</b> <input type="text" name="cellphone"> <br>
			<b>Email:</b> <input type="text" name="email"> <br>
			<b>CEP:</b> <input type="text" name="cep"> <br>
			<b>Endereço:</b> <input type="text" name="address"> <br>
			<b>Número:</b> <input type="text" name="number"> <br>
			<b>Complemento:</b> <input type="text" name="complement"> <br>
			<b>Bairro:</b> <input type="text" name="neighborhood"> <br>
			<b>Cidade:</b> <input type="text" name="city"> <br>
			<b>Estado:</b> <input type="text" name="state"> <br>
			<b>Observações:</b> <textarea name="obs" placeholder="Digite suas observações aqui...."></textarea> <br>

			<input type="reset" value="Limpar">
			<input type="submit" value="Cadastrar">
		</form>
	</body>
</html>