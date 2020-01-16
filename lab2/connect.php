<?php 
//server
$servername = "localhost";
//mysql(db) username
$username = "root";
//mysql (db)password
$password = "oracle";
// Create connection 
$conn = new mysqli($servername, $username, $password);
// Check connection 
if ($conn->connect_error) { 
	die("Connection failed: " . $conn->connect_error); 
	} 
echo"Connected successfully"; 
?>