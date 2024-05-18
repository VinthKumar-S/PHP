<html>
<body>
<form  action="" method="POST">	
Enter the Number<input type="text" name="t1">
<input type="submit" name="submit" value="submit">
</form>
<?php
$num=$_POST['t1'];

function rev($num)
{
	$rev=0;
	while ($num>1) 
	{
		$rem=$num%10;
		$rev=($rev*10)+$rem;
		$num=($num/10);
	}
return $rev;	
}
 echo "Reverse:".rev("$num");
?>
</body>
</html>