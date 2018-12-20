<?php

class EmailValidate {
	
	public static function validateEmail($email) {
		$regExp = '#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#';
		if (preg_match($regExp, $email)) return true;
		else return false;
	}

}

?>