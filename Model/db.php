<?php
	$dbname = "project";
	$dbuser = "root";
	$dbpass = "";
	$host	= "localhost";


	function getConnection(){
		global $dbname, $dbpass, $host, $dbuser;
	
		$conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);
		return $conn;
	}
?>