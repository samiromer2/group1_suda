<?php 
//print_r($_POST);

$id    = $_POST['id']; 
$dname = $_POST['empname']; 

$servername = "localhost";
$username = "root";
$password = "oracle"; //here is your password
$dbname = "group1_suda"; // here your dbname
$conn = new mysqli($servername, $username, $password, $dbname);

//$_POST[] Array
//$_POST['']

$sql = "INSERT INTO `department`(`id`,`name`) VALUES (NULL,'$dname')";
//execute (query)
$conn->query($sql);
header("location:deptform.php");
 
?>