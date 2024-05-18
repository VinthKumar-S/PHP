<html>
<body bgcolor=pink>
<center><h1>Sum of Digits</h1></center>
<form method="POST">
Enter the Number:<input type="text" name="in"><br>
<input type="submit" name="yes" value="submit">
</form>
<?php
function sum($num)
{	$sum=0;
	while($num>0)
	{
		$dig=$num%10;
		$sum=$sum+$dig;
		$num=$num/10;
	}
	echo "Sum of Digits:".$sum;
}
$num=$_POST['in'];
sum($num);
?>
</body>
</html>
