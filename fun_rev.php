<html>
<body bgcolor=tomato>
<center><h1>Reverse Number</h1></center>
<form method="POST">
Enter the Number:<input type="text" name="in"><br>
<input type="submit" name="yes" value="submit">
</form>
<?php
function rev($num)
{	$rev=0;
	while($num>1)
	{
		$rem=$num%10;
		$rev=($rev*10)+$rem;
		$num=$num/10;
	}
return $rev;
}
$num=$_POST['in'];
echo "Reverse Value:".rev("$num");
?>
</body>
</html>
