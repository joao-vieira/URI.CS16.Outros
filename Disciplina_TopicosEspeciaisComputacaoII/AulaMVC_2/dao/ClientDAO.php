<?php
include "../persistence/ConnectionDB.php";

class ClientDAO {
	private $connection = null;

	public function __construct() {
		$this->connection = ConnectionDB::getInstance();
	}

	public function insereCliente($client) {
		try {
			$status = $this->connection->prepare("INSERT INTO clients (id, nome, data_aniversario, cpf, sexo, profissao, telefone, celular, email, cep, endereco, numero, complemento, bairro, cidade, estado, obs) VALUES (null, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)" );


			$status->bindValue(1, $client->name);
			$status->bindValue(2, $client->dateBirth);
			$status->bindValue(3, $client->cpf);
			$status->bindValue(4, $client->sex);
			$status->bindValue(5, $client->profission);
			$status->bindValue(6, $client->telephone);
			$status->bindValue(7, $client->cellphone);
			$status->bindValue(8, $client->email);
			$status->bindValue(9, $client->cep);
			$status->bindValue(10, $client->address);
			$status->bindValue(11, $client->number);
			$status->bindValue(12, $client->complement);
			$status->bindValue(13, $client->neighborhood);
			$status->bindValue(14, $client->city);
			$status->bindValue(15, $client->state);
			$status->bindValue(16, $client->obs);

			$status->execute();

			$this->connection = null;

		} catch(Exception $e) {
			echo "Erro na inserção de Cliente!";
			echo "<pre>$e</pre>";
			exit();
		}
	}
}

?>