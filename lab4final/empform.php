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
</table>
<form action = "page.php" method = "POST">
<table>

<tr>
<td>name </td>
<td><input name = "empname" type = "text"> </td>
</tr>
<tr>
<td>address </td>
<td><input name = "loc" type = "text"></td>
</tr>
<tr>
<td>phone </td>
<td><input name = "phone" type = "text"></td>
</tr>
<tr>
<td>age </td>
<td><input name = "age" type = "text"></td>
</tr>
<tr>
<td>department </td>
<td><input name = "age" type = "text"></td>
</tr>
<tr>
<td>gender </td>
<td>
<select name = "gender">
<option>Male</option>
<option>Female</option>
</select>
</td>
</tr>
<tr>
<td></td>
<td>

<input name = "b1" type = "submit" value = "Save">

</td>

</tr>
</table>
</form>