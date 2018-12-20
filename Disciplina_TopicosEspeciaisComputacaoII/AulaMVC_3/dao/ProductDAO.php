<?php
include '../persistence/ConnectionDB.php';

class ProductDAO {
	private $connection = null;

	public function __construct() {
		$this->connection = ConnectionDB::getInstance();
	}

	public function insereProduto($product) {
		try {
			$status = $this->connection->prepare("INSERT INTO products(id, descricao, cod_referencia, marca) VALUES (null,?,?,?) ");

			$status->bindValue(1, $product->descricao);
			$status->bindValue(2, $product->codReferencia);
			$status->bindValue(3, $product->marca);

			$status->execute();

			$this->connection = null;
		} catch(Exception $e) {
			echo "Erro ao inserir Produto!";
			echo "<pre>$e</pre>";
			exit();
		}
	}
}

?>