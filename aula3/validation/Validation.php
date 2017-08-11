<?php


class Validation {
	
	public function validateMethod($method){
		if($method == "GET" || $method == "POST" || $method == "PUT" || $method == "DELETE"){
			return  true;
		} else{
			return false;
		}
	}

	public function validateProtocol($protocol){
		if($protocol == "HTTP" || $protocol == "HTTPS"){
			return true;
		}else{
			return false;
		}
	}


}