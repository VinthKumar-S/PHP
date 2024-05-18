<html>
<body bgcolor=gray>
<form action="" method="POST">
<font color=blue>
<center><h1>Factorial Number</h1></center>
</font>
<font color=black>
Enter the Number:<input type="text" name="input"><br>
<input type="Submit" name="yes" value="Submit"><br>
</form>
<?php
	$r=1;
	$n1=$_POST['input'];
	for($i=1;$i<=$n1;$i++)
	{
		$r=$r*$i;
	}
	echo "Factorial value is:$r";
?>
</font>
</body>
</html>

