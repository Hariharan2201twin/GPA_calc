<!DOCTYPE html>
<html>
<head>
	<title>c1</title>
</head>
<body>
<form action="c2.php" method="post">
<?php
$b=($_POST['a']);
$a=ucwords($b);
$b=$_POST['name'];
?>
<input type="hidden" name="name" value="<?php echo $b ?>" >
<h2><?php echo "Enter your ".$a." Grades" ?></h2>
<table>
<tr>
<th>S.No</th>
<th>Subjects</th>
<th>Credit point</th>
<th>Grade</th>
</tr>
<tr>
<td>1</td>
<td>DM</td>
<td>4</td>
<td><select name="s1">
		<option>S</option>
		<option>A</option>
		<option>B</option>
		<option>C</option>
		<option>D</option>	
		<option>E</option>	
		<option>U</option>
	</select>
</td>
</tr>
<tr>
<td>2</td>
<td>IP</td>
<td>4</td>
<td><select name="s2">
		<option>S</option>
		<option>A</option>
		<option>B</option>
		<option>C</option>
		<option>D</option>	
		<option>E</option>
		<option>U</option>
	</select></td>
</tr>
<tr>
<td>3</td>
<td>TOC</td>
<td>4</td>
<td><select name="s3">
		<option>S</option>
		<option>A</option>
		<option>B</option>
		<option>C</option>
		<option>D</option>	
		<option>E</option>
		<option>U</option>

	</select></td>
</tr>
<tr>
<td>4</td>
<td>OOAD</td>
<td>3</td>
<td><select name="s4">
		<option>S</option>
		<option>A</option>
		<option>B</option>
		<option>C</option>
		<option>D</option>	
		<option>E</option>
		<option>U</option>
	</select></td>
</tr>
<tr>
<td>5</td>
<td>CG</td>
<td>3</td>
<td><select name="s5">
		<option>S</option>
		<option>A</option>
		<option>B</option>
		<option>C</option>
		<option>D</option>
		<option>E</option>	
		<option>U</option>
	</select></td>
</tr>
</table>
<center><input type="submit" name="submit"></center>
</form>
</body>
</html>
