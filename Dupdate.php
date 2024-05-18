<html>
<body>
<?php
$con=mysqli_connect('localhost','root','','mystorage');
if($con)
{
	echo"connection success  <br>";
	$disp="UPDATE ins SET Name='kavi' WHERE Id=73";
	$result=mysqli_query($con,$disp);
	if($result)
	{

		echo "The Row has been Updated<br>";
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