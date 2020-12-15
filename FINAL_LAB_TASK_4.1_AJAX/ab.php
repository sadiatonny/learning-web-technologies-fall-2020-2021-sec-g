<?php

	$location 	= 'localhost';
	$dbuser		= 'root';
	$dbpass		= '';
	$database	= 'profile'; 
	function getConnection(){
		global $location;
		global $abuser;
		global $abpass;
		global $database;

		$conn = mysqli_connect($location, $abuser, $abpass, $database);
		return $conn;
	}
?>