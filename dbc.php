<?php

class document{
	var $conn;

	function connection(){

		$this->conn = mysqli_connect("localhost","root","","bookshop");

		return $this->conn;
	}
}


?>