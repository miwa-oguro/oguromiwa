<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "Bookstore";
	
	$conn = new mysqli ($servername, $username, $password, $dbname);
	if ($conn->connect_error){
		die("Connection Failed:" . $conn->connect_error);
	}
	$sql = "insert into Books (ISBN, Title, Author, Price) value (12345678901, 
			'Verity', 'Colleen Hoover', 899)";
	
	if($conn->query ($sql) === true) {
		echo "New record created";
	}
	else{
		echo "Error inserting data!: " . $conn->error;
	}
	$conn->close();
?>