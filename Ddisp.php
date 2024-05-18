<html>
<body>
<?php
$con=mysqli_connect('localhost','root','','mystorage');
if($con)
{
	echo"connection success  <br>";
	$disp="SELECT * FROM ins";
	$result=mysqli_query($con,$disp);
	if($result)
	{
		while($row=$result->fetch_assoc())
		{
			$flag=1;
			$id=$row["Id"];$name=$row["Name"];
		}
		if($flag==1)
		{

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