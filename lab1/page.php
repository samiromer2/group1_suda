<?php 
//in those lines of code 
// 0 - > means that the emp was kicked
// 1 -> means that the emp is still with us
echo "hello"; //to print
print_r($_POST);

echo "<br>";
$id     = $_POST['id'];
$name   = $_POST['empname'];
$loc    = $_POST['loc'];
$phone  = $_POST['phone'];
$gender = $_POST['gender'];
$age    = $_POST['age'];

?>
<table border = "3">
<tr>
<td>Id</td>
<td>name</td>
<td>address</td>
<td>phone</td>
<td>age</td>
<td>gender</td>
</tr>
<tr>
<td><?php echo $id;?></td>
<td><?php echo $name;?></td>
<td><?php echo $loc;?></td>
<td><?php echo $phone;?></td>
<td><?php echo $gender;?></td>
<td><?php echo $age;?></td>
</tr>
</table>
