<?php
public class Request{
	private $method;
	//private $status;//*
	private $protocol;
	private $host;
	//private $type;//*
	//private $category;//*
	//private $size;//*
	//private $transfer;//*
	private $path;
	private $queryString;
	private $body;

	public __construct($method, $protocol, $host, $path = null, $queryString = null , $body= null){
		$this->method = $method;		
		$this->protocol = $protocol;
		$this->host = $host;
		$this->path = $path;
		$this->queryString = $queryString;
		$this->body = $body;
	}

	public function getMethod() {
        	return $this->method;
    	}
	public function setMethod($method) {
        	$this->method = $method;
   	}
/*	public function getStatus() {
       	return $this->status;
   	}
	public function setStatus($status) {
        	$this->status = $status;
   	}*/
	public function getProtocol() {
        	return $this->protocol;
    	}
	public function setProtocol($protocol) {
        	$this->protocol = $protocol;
   	}
	public function getHost() {
        	return $this->host;
    	}
	public function setHost($host) {
        	$this->host = $host;
   	}
/*	public function getType() {
        	return $this->type;
    	}
	public function setType($type) {
        	$this->type = $type;
   	}
	public function getCategory() {
        	return $this->category;
    	}
	public function setCategory($category) {
        	$this->category = $category;
   	}
	public function getSize() {
        	return $this->size;
    	}
	public function setSize($size) {
        	$this->size = $size;
   	}
	public function getTransfer() {
        	return $this->transfer;
    	}
	public function setTransfer($transfer) {
        	$this->transfer = $transfer;
   	}*/
	public function getPath() {
        	return $this->path;
    	}
	public function setPath($path) {
        	$this->path = $path;
   	}
	public function getQueryString() {
        	return $this->queryString;
    	}
	public function setQueryString($queryString) {
        	$this->queryString = $queryString;
   	}
   	public function getBody() {
   			return $this->body;
   	}
   	public function setBody($body) {
   			$this->body = $body;
   	}
}