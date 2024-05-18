<html>
<body>
<form action=""	method="POST">
Enter the Number:<input type="text" name="val"><br>
7 Table<input type="radio" name="ch" value="1"><br>
8 Table<input type="radio" name="ch" value="2"><br>
<input type="submit" name="yes" value="submit"><br>
</form>
<?php
$str=$_POST['val'];
$num=array( ); 
	$num=explode(",",$str);
$ch=$_POST['ch'];
$n=count($num);
echo "Array elements:";
foreach ($num as $key => $value) {
	echo "$value";
}
switch ($ch) {
	case '1':
				include 'C:\xampp\htdocs\php\inc_7.php';
		break;
	case '2':
					include 'C:\xampp\htdocs\php\inc_8.php';
	
		break;
	default:
		# code...
		break;
}
?>
</body>
</html>	