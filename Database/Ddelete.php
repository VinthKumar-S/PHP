<html>
<body>
<?php
$con=mysqli_connect('localhost','root','','mystorage');
if($con)
{
	echo"connection success  <br>";
	$disp="DELETE  FROM ins WHERE Id=88";
	$result=mysqli_query($con,$disp);
	if($result)
	{

		echo "The Row has been Deleted<br>";
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