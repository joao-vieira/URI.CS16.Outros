<?php

class ClientModel {
	private $name;
	private $dateBirth;
	private $cpf;
	private $sex;
	private $profission;
	private $telephone;
	private $cellphone;
	private $email;
	private $cep;
	private $address;
	private $number;
	private $complement;
	private $neighborhood;
	private $city;
	private $state;
	private $obs;

	
	// Construtor
	public function __construct(){
	}

	// Setter
	public function __set($property, $value){
		$this->$property = $value;
	}

	// Getter
	public function __get($property){
		return $this->$property;
	}
}

?>