<html>
<body bgcolor=MediumSeaGreen>
<form action="" method="POST">
<center><h1>Demonstrate Includ Method</h1></center>
Enter elements for array and separated by commas<input type="text" name="in"><br>
Multiples of 7 <input type="radio" name="op" value="1"><br>
Multiples of 8<input type="radio" name="op" value="2"><br>
<input type="submit" name="submit" value="Submit">
</form>
<?php
$str=$_POST['in'];
$ch=$_POST['op'];
$num=array();
$num=explode(",",$str);
$n=count($num);

echo "Elements of Array:<br>";
foreach($num as $v)
{
	echo "$v<br>";
}
switch($ch){
	case '1':
		include 'inc_7.php';
	break;
	case '2':
		include 'inc_8.php';
	break;
	default:
	break;
}
?>
<body>
<html>


