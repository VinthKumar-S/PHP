<html>
<body bgcolor=MediumSeaGreen>
<font color=blue>
<form action="" method="POST">
<center><h1>Fibonacci Series</h1></center>
</font>
<font color=Orange>
Enter the Number:<input type="text" name="val">
<br>
<input type="Submit" name="yes" value="Submit">
</form>
</font>
<font color=red>
<?php
	
	$count=$_POST['val'];
	$n1=0;
	$n2=1;
	$n3;
	$i=3;
	echo "Fibbonacci series:<br>".$n1."<br>".$n2;
	while($i<=$count)
	{
		$n3=$n1+$n2;
		$n1=$n2;
		$n2=$n3;
		$i++;
		echo "<br>".$n3;
	}

?>
</font>
</body>
</html>

