<?php
session_start();
include '../model/ClientModel.php';
include '../dao/ClientDAO.php';
include '../includes/EmailValidate.php';

if (isset($_POST)) {
	$requestOK		= true;

	$name 			= ($_POST['name']) ? $_POST['name'] : $requestOK = false;
	$dateBirth 		= ($_POST['dateBirth']) ? $_POST['dateBirth'] : $requestOK = false;
	$cpf 			= ($_POST['cpf']) ? $_POST['cpf'] : $requestOK = false;
	$sex 			= ($_POST['sex']) ? $_POST['sex'] : $requestOK = false;
	$profission 	= ($_POST['profission']) ? $_POST['profission'] : $requestOK = false;
	$telephone 		= ($_POST['telephone']) ? $_POST['telephone'] : $requestOK = false;
	$cellphone 		= ($_POST['cellphone']) ? $_POST['cellphone'] : $requestOK = false;
	$email 			= ($_POST['email']) ? $_POST['email'] : $requestOK = false;
	$cep 			= ($_POST['cep']) ? $_POST['cep'] : $requestOK = false;
	$address 		= ($_POST['address']) ? $_POST['address'] : $requestOK = false;
	$number 		= ($_POST['number']) ? $_POST['number'] : $requestOK = false;
	$complement 	= ($_POST['complement']) ? $_POST['complement'] : $requestOK = false;
	$neighborhood 	= ($_POST['neighborhood']) ? $_POST['neighborhood'] : $requestOK = false;
	$city 			= ($_POST['city']) ? $_POST['city'] : $requestOK = false;
	$state 			= ($_POST['state']) ? $_POST['state'] : $requestOK = false;
	$obs 			= ($_POST['obs']) ? $_POST['obs'] : $requestOK = false;

	// echo $name 	."  |  ". $dateBirth  	."  |  ". $cpf 	 	."  |  ". $sex 	 	."  |  ". $profission 	."  |  ". $telephone  	."  |  ". $cellphone  	."  |  ". $email 	 	."  |  ". $cep 	 	."  |  ". $address  	."  |  ". $number  	."  |  ". $complement 	."  |  ". $neighborhood  	."  |  ". $city  	."  |  ". $state 	 	."  |  ". $obs;

	if ($requestOK) {
		if (EmailValidate::validateEmail($email)) {
			$client = new ClientModel();

			$client->name 			= $name;
			$client->dateBirth 		= $dateBirth;
			$client->cpf 			= $cpf;
			$client->sex 			= $sex;
			$client->profission 	= $profission;
			$client->telephone 		= $telephone;
			$client->cellphone 		= $cellphone;
			$client->email 			= $email;
			$client->cep  			= $cep ;
			$client->address 		= $address;
			$client->number 		= $number;
			$client->complement 	= $complement;
			$client->neighborhood 	= $neighborhood;
			$client->city 			= $city;
			$client->state 			= $state;
			$client->obs 			= $obs;

			$_SESSION['name'] 	= $client->name;
			$_SESSION['cpf'] 	= $client->cpf;
			$_SESSION['email'] 	= $client->email;

			$clientDAO = new ClientDAO();
			$clientDAO->insereCliente($client);

			header("location:../view/ClientInsertSuccess.php");
		} else {
			$err = "E esse email troll aí ? Assim não vai dar!";
			$_SESSION['error'] = $err;
			header("location:../view/ClientError.php");
		}
	} else {
		$err = "Preencha todos os campos!";
		$_SESSION['error'] = $err;
		header("location:../view/ClientError.php");
	}

	
} else {
	echo "<br/><br/>Não recebemos sua solicitação!<br/>";
}


?>