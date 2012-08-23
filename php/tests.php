<?php
	echo "testing...";
	
	//test connection class
	require("tdg_db_connect.php");
	
	$c = new connection();
	
	$c->makeConnection();
	
	echo "success... ".$c->conn->host_info."\n";
	
	$c->closeConnection();
	
	echo "close... ".$c->conn->host_info;
	//--------------------

?>