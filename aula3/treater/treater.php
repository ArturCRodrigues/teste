<?php
require_once('../validation/Validation.php');

class Treater{
	
	public function jsonValidateMethod($method){
		$validate = new Validation();

		if ($validate->validateMethod($method)== true) {
			return json_encode(array("Code"=>200,
									 "Message" =>'OK'));
		}else{
			return json_encode(array("Code"=> 405,
									 "Message" => 'Método não permitido'));	
		}
	}

	public function jsonValidateProtocol($protocol){
		$validate = new Validation();

		if ($validate->validateProtocol($protocol) == true) {
			return json_encode(array("Code"=>200,
									 "Message"=>'OK'));
		}else{
			return json_encode(array("Code"=>403
									 "Message"=>'Proibido'));
		}
	}


}