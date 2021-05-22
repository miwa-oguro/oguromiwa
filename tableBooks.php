<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "Bookstore";
	
	$conn = new mysqli ($servername, $username, $password, $dbname);
	if ($conn-> connect_error){
		die("Connection Failed:" . $conn->connect_error);
	}
	
	$sql = "create table Books (
	ISBN varchar(13) primary key,
	Title varchar(50) not null,
	Author varchar(50) not null,
	Price int(5) not null)";
	
	if($conn->query($sql) === true){
		echo "Table successfully created";
	}
	else{
		echo "Error in creating Table: ". $conn->error;
	}
	$conn->close();

?>