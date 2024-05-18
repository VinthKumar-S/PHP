<html>
<body>
<form  action="" method="POST">	
Enter the Number<input type="text" name="t1">
<input type="submit" name="submit" value="submit">
</form>
<?php
$num=$_POST['t1'];

function sum1($num)
{
	$sum=0;
	while ($num>0) 
	{
		$dig=$num%10;
		$sum=$sum+$dig;
		$num=($num/10);
	}
	echo "Sum of Digits:".$sum;
}
  sum1("$num");
?>
</body>
</html>	