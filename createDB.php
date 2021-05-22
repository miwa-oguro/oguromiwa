<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	
	$conn = new mysqli ($servername, $username, $password);
	
	if ($conn->connect_error){
		die("Connection Failed:" . $conn->connect_error);
	}
	
	$sql = "create database Bookstore";
		if ($conn->query($sql) == true){
			echo "Database successfully created";
		}
		else{
			echo "Error in creating database: " . $conn->error;
		}
		$conn->close();
?>