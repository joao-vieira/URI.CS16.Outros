<?php

class ConnectionDB extends PDO {
	private static $instance = null;
	
	public function __construct($dns, $user, $pass) {
		parent::__construct($dns, $user, $pass);
	}

	public static function getInstance() {
		if(!isset(self::$instance)) {
			try {
				self::$instance = new ConnectionDB("mysql:dbname=ecomm;host=localhost", "root", "MYSECRET");
			} catch(Exception $e) {
				echo "Problema ao conectar no banco de dados!";
				echo "<pre>$e</pre>";
				exit();
			}
		}
		return self::$instance;
	}
}

?>