<html>
<body>
<form action=""	method="POST">
Enter the Number:<input type="text" name="val">
<input type="submit" name="yes" value="submit">
</form>
<?php
$str="".$_POST['val'];
$num=array( );
$i; $k; $j; 
for ($i=0; $i <10 ; $i++) 
{ 
	$num=explode(",",$str,$i);
}
$n=count($num);
$max=$num[0];
for($j=0;$j<$n;$j++)
{
	if($max<$num[$j])
		$max=$num[$j];
}
echo "This Biggest number is:$max<br>";
$min=$num[0];
for($k=0;$k<$n;$k++)
{
	if($min>$num[$k])
		$min=$num[$k];
}
echo "The Smallest number is:$min";
?>
</body>
</html>