<?php 

	// banco de dados
	$servername = "gustav0meira.cloud";
	$username = "u868458939_freeflow";
	$password = "Free@Flow19";
	$dbname = "u868458939_freeflow";

	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
	    die("Falha na conexão: " . $conn->connect_error);
	}

?>