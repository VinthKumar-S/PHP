<html>
<body bgcolor=tomato>
<center><h1>Array Funcations</h1></center>
<form action="" method="POST">
<h3>
Enter the 1st Array elements:<input type="text" name="val1"><br>
Enter the 2st Array elements:<input type="text" name="val2"><br>
Enter the Search elements:<input type="text" name="chr"><br>
</h3>
<input type="submit" name="yes" value="submit"><br>
</form>
<?php
$tr=$_POST['val1'];
$num=array();
$num=explode(',',$tr);
$str=$_POST['val2'];
$num2=array();
$num2=explode(',',$str);
$src=$_POST['chr'];

echo "Frist Array elements:<br>" ;
foreach($num as $v)
{
  echo $v."<br>";
}

echo "Second Array elements:<br>" ;
foreach($num2 as $v)
{
  echo $v."<br>";
}
echo"1.Searching the element:".$src."in 1st Array & indexing vlaue is:".array_search($src,$num)."<br>";
echo"2.Sum of Array elements in 1st Array:".array_sum($num)."<br>";

echo "3.Array Intersection:";
$r1=(array_intersect($num,$num2));
print_r($r1);
echo "<br>";

echo "4.Array Differece A-B:";
$r2=(array_diff($num,$num2));
print_r($r2);
echo "<br>";

echo "5.Array Merge A&B:";
$r3=(array_merge($num,$num2));
print_r($r3);
echo "<br>";
?>
</body>
</html>
