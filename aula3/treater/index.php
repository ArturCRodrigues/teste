<?php
	
	include("Request.php")
	$request = new Request($_SERVER['REQUEST_METHOD'], $_SERVER['SERVER_PROTOCOL'], $_SERVER['HTTP_HOST']));
	$validate = new Vadation();
	$treater = new Treater();

	$validateMethod = $validate->validateMethod($request->getMethod());
	$validateProtocol = $validate->validateProtocol($request->getProtocol());
	$jsonVMethod = $treater->jsonValidateMethod($request->getMethod());
	$jsonVProtocol = $treater->jsonValidateProtocol($request->getProtocol());
	
	var_dump($request);
	var_dump($jsonVMethod);
	var_dump($jsonVProtocol);
	var_dump($validateMethod);
	var_dump($validateProtocol);
