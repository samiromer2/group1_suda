<?php 
$servername = "localhost";
$username = "root";
$password = "oracle"; //here is your password
$dbname = "group1_suda"; // here your dbname
$conn = new mysqli($servername, $username, $password, $dbname);

if(isset($_POST['delete']))
{
$theid = $_POST['id'];
$deletesql = "DELETE FROM `department` where `id` = '$theid'"; 
$conn->query($deletesql);
}
if (isset($_POST['edit']))
{
$theid      = $_POST['id'];
$updatename = $_POST['updatename'];

$updatesql = "UPDATE `department` SET `name`='$updatename' WHERE `id`='$theid'"; 
$conn->query($updatesql);
//
echo " you are editing";
}
?>
<table>
<tr>
<td>
<a href = "deptform.php" >Dept</a> 
<a href = "#" >account</a> 
<a href = "empform.php" >emp</a> 
<a href = "#" >item</a> 
<a href = "#" >price</a> 
<a href = "#" >sells</a> 
<a href = "#" >store</a> 
<a href = "#" >supplier</a> 
</td>
</tr>
<tr>
<td>
<a href = "reportdept.php">dept report </a>
</td>
</tr>
</table>
<?php 


$sql = "SELECT `id`, `name` FROM `department` "; 
$result = $conn->query($sql);
?>
<table border = '5'>
<th>no</th>
<th>dname</th>
<th></th>
<?php
$count = 1;
while($row = $result->fetch_assoc()) 
{
$namefromdb = $row['name'];
$idfromdb = $row['id'];
?>
<form action = "reportdept.php" method = "POST" >

<tr><td><?php echo $count;?></td>
<input type = "hidden" name = "id" value = "<?php echo $idfromdb;?>">
<td><input type = "text" name = "updatename" value = "<?php echo $namefromdb;?>">
</td>
<td><input name = "delete" type = "submit" value = "delete"></td>
<td><input name = "edit" type = "submit" value = "edit"></td>
</tr>
</form>
<?php
$count = $count + 1;
//$count +=1;
//$count++;

} 
echo "</table>";
?>