<html>
<body bgcolor=MediumSeaGreen>
<form action="" method="POST">
<center><h1>Find the Biggest and Smallest value in Array</h1></center>
Enter size of array:<input type="text" name="size"><br>
Enter elements for array and separated by comas<input type="text" name="in"><br>
<input type="submit" name="submit" value="Submit">
</form>
<?php
$str=$_POST['in'];
$size=$_POST['size'];
$num=array();

$num=explode(",",$str);
$n=count($num);
echo "Elements of Array:<br>";
foreach($num as $v)
{
	echo "$v<br>";
}
if($n==$size)
{
	$max=$num[0];
	for($j=0;$j<$n;$j++)
	{
		if($max<$num[$j])
		{
			$max=$num[$j];
		}
	}
	echo "Biggest Number:$max<br>";
	$min=$num[0];
	for($k=0;$k<$n;$k++)
	{
		if($min>$num[$k])
		{
			$min=$num[$k];
		}
	}
	echo "The Smallest Number:$min";
}
else
	echo "Array size and elements counts are not matched";
?>
<body>
<html>


