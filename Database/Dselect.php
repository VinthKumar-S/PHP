<html>
<body>
	<form action="" method="POST">
Enter the you want to Search:<input type="text" name="in"><br>
<input type="submit" name="submit" value="Search">
</form>	
<?php
$src=$_POST['in'];
$con=mysqli_connect('localhost','root','','mystorage');
if($con)
{
	echo"connection success  <br>";
	$disp="SELECT * FROM ins WHERE Id=$src";
	$result=mysqli_query($con,$disp);
	if($result)
	{

		echo "The Row has been Selected<br>";
		while($row=$result->fetch_assoc())
		{
			echo "id:".$row["Id"]."Names:".$row["Name"]."<br>";

		}
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