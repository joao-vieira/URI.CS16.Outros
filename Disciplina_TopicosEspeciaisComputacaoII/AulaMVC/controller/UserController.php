<?php
	session_start();
	include '../model/UserModel.php';
	include '../includes/UserValidate.php';
	include '../dao/UserDAO.php';

	if ( (!empty($_POST['txtUser'])) && (!empty($_POST['txtNome'])) && (!empty($_POST['txtSobrenome'])) &&
		 (!empty($_POST['txtEmail'])) && (!empty($_POST['txtIdade'])) && (!empty($_POST['pwdSenha'])) ) {
		
		$erros = array();

		if(!UserValidate::testarIdade($_POST['txtIdade'])) {
			$erros[] = "Idade Inválida!";
		}

		if(!UserValidate::testarEmail($_POST['txtEmail'])) {
			$erros[] = "Email Inválido!";
		}

		if (count($erros) == 0) {
			$user =  new UserModel();

			$user->user 		= $_POST['txtUser'];
			$user->nome 		= $_POST['txtNome'];
			$user->sobrenome 	= $_POST['txtSobrenome'];
			$user->idade 		= $_POST['txtIdade'];
			$user->email 		= $_POST['txtEmail'];
			$user->password 	= $_POST['pwdSenha'];

			$userDAO = new UserDAO();
			$userDAO->insertUser($user);

			$_SESSION['user']	= $user->user;
			$_SESSION['email']	= $user->email;

			header("location:../view/UserViewResult.php");
		} else {
			$err = serialize($erros);
			$_SESSION['erros'] 	= $err;
			header("location:../view/UserViewErro.php");
		}

	} else {
		echo "Informe todos os campos!";
	}

?>