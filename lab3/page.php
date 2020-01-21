<?php 
$servername = "localhost";
$username = "root";
$password = "oracle";
$dbname = "group1_suda";
$conn = new mysqli($servername, $username, $password, $dbname);

//$_POST[] Array
//$_POST['']
$dname   = $_POST['dname'];

$sql = "INSERT INTO `department`(`id`,`name`) VALUES (NULL,'$dname')";
//execute (query)
$conn->query($sql);

$sql = "SELECT `id`, `name` FROM `department` "; 
$result = $conn->query($sql);

?>
<table border = '5'>
<?php
$count = 1;
while($row = $result->fetch_assoc()) 
{
?>
<tr><td><?php echo $count;?></td>
<td><?php echo $row['name'];?></td></tr>

<?php
$count = $count + 1;
//$count +=1;
//$count++;

} 
echo "</table>";
?>

