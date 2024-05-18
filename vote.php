<html>
<body bgcolor=pink>
<form action="" method="post">
<h1>
<center>
Vote Eligible
</center>
</h1>
Enter no:
<input type="text" name="t1">
<br><input type="submit" name="submit" value="submit">
</form>
<?php
	$a=$_POST['t1'];

	if($a>=18)
	{
		echo "You are Eligible for Vote";
	}
	else
	{
		echo "You are NOT Eligible for Vote";
	}

?>
</body>
</html>

