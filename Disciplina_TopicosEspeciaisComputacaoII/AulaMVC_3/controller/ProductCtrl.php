<?php

session_start();
include '../model/ProductModel.php';
include '../dao/ProductDAO.php';

if (isset($_POST)) {
	
	if ( !empty($_POST['descricao']) && !empty($_POST['codReferencia']) && !empty($_POST['marca']) ) {
		$descricao 		= $_POST['descricao'];
		$codReferencia 	= $_POST['codReferencia'];
		$marca 			= $_POST['marca'];

		$product = new ProductModel();
		$product->descricao 	= $descricao;
		$product->codReferencia = $codReferencia;
		$product->marca 		= $marca;

		$productDAO = new ProductDAO();
		$productDAO->insereProduto($product);

		$_SESSION['descricao']  = $product->descricao;
		$_SESSION['marca'] 		= $product->marca;

		header("location:../view/ProductInsertSuccess.php");
	} else {
		$err = "Preencha todos os campos!";
		$_SESSION['error'] = $err;
		header("location:../view/ProductError.php");
	}

} else {
	$err = "Não recebemos sua requisição!";
	$_SESSION['error'] = $err;
	header("location:../view/ProductError.php");
}

?>