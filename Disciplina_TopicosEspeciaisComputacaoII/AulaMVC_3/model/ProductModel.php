<?php

class ProductModel {

	private $descricao;
	private $codReferencia;
	private $marca;

	// Construtor
	public function __construct() {

	}

	// Getter
	public function __get($property) {
		return $this->$property;
	}

	// Setter
	public function __set($property, $value) {
		$this->$property = $value;
	}
}

?>