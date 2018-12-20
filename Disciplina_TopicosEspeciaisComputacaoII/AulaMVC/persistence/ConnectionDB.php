<?php

class ConnectionDB extends PDO {
	private static $instance = null;

	public function __construct($dns, $usuario, $senha) { // Poderia ser public function ConnectionDB
		// Construtor da classe Pai (parent) -> PDO
		parent::__construct($dns, $usuario, $senha);
	}

	public static function getInstance() {
		if (!isset(self::$instance)) {
			try {
				self::$instance = new ConnectionDB("mysql:dbname=ecomm;host=localhost","root", "MYSECRET");
				echo "Conectado ao banco de dados.";
			} catch(Exception $e) {
				echo "Ocorreram erros ao tentar conectar ao banco de dados!";
				echo "<pre>$e</pre>";
				exit();
			}
		}
		return self::$instance;
	}
	
}

?>