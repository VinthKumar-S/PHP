<html>
<body>
<form action=""	method="POST">
Enter the Elements for the 1st Array:<input type="text" name="val1"><br>
Enter the Element for the 2nd Array:<input type="text" name="val2"><br>
Enter the search element:<input type="text" name="val3"><br>
<input type="submit" name="yes" value="submit">
</form>
<?php
$str=$_POST['val1'];
$num=array( );
$num=explode(',',$str);

$str=$_POST['val2'];
$num2=array( );
$num2=explode(',',$str);

$src=$_POST['val3'];
echo "1st Array Value:";
foreach ($num as $key => $value) {
	# code...
	echo $value.",";
}
echo "<br>2nd Array Value:";
foreach ($num2 as $key => $value) {
	# code...
	echo $value.",";
}
echo "<br>1.Sum of Array:".array_sum($num)."<br>";
echo "2.Search in Array:".(array_search($src,$num)). "<br>";

$r1=(array_intersect($num,$num2));
echo "3.Intersection :";
print_r($r1);
echo  "<br>";

$r2=(array_diff($num,$num2));
echo "4.Difference  :";
print_r($r2);
echo  "<br>";

$r3=(array_merge($num,$num2));
echo "5.Merging :";
print_r($r3);
echo  "<br>";
?>
</body>
</html>