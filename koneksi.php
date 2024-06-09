<?php
	$host = "localhost";
	$username = "root";
	$password = "";
	$database = "db_uas_web2";
	
	// Koneksi ke database
	$conn = mysqli_connect($host, $username, $password, $database);

	// Periksa koneksi
	if (!$conn) 
	{
		die("Koneksi ke database gagal: " . mysqli_connect_error());
	}

?>