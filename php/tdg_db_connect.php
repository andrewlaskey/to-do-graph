<?php

class connection {

	public $userName 	= "root";
	public $pass		= "root";
	public $db			= "to_do_graph";
	public $site		= "localhost";
	public $conn;
	
	public function makeConnection() {
		
		$this->conn = new mysqli($this->site, $this->userName, $this->pass, $this->db);
		
		if ($mysqli->connect_error) {
    		die('Connect Error (' . $mysqli->connect_errno . ') '
            	. $mysqli->connect_error);
		}
	}
	
	public function closeConnection() {
		$this->conn->close();
	}
	
	
}


?>