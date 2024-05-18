<html>
<body>
<form action="" method="POST">	
Enter the Name:<input type="text" name="name"><br>
Enter the Id:<input type="text" name="id"><br>
<input type="submit" name="submit" value="yes"><br>
</form>

<?php
$id=$_POST['id'];
$name=$_POST['name'];
$con=mysqli_connect('localhost','root','','mystorage');
if($con)
{
	echo"connection success  <br>";
	$query="INSERT INTO ins VALUES('$id','$name')";
	$ins=mysqli_query($con,$query);
	if($ins)
	{
		echo"inserted    <br>";
	}
	else
	{
		echo"error".mysqli_error($con)."<br>";
	}
}
else
{
	echo"error".mysqli_error($con)."<br>";
}
?>
</body>
</html>