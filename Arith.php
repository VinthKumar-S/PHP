<html>
<body bgcolor=pink>
<form action="" method="POST">
<font color=Blue>
<center><h1>Arithmetic Operations</h1></center>
</font>
<center>
<font color=yellow>
<h3>
Enter First Number:<input type="text" name="a"><br>
Enter Second Number:<input type="text" name="b"><br>
</h3>
</font>
Addition      :<input type="radio" name="input" value="1"><br>
Subtraction   :<input type="radio" name="input" value="2"><br>
Multiplication:<input type="radio" name="input" value="3"><br>
Division      :<input type="radio" name="input" value="4"><br>
Modules       :<input type="radio" name="input" value="5"><br>
<input type="submit" name="yes" value="Calculate"><br>
</form>
<h3>
<?php
$ch=$_POST['input'];
$n1=$_POST['a'];
$n2=$_POST['b'];
switch($ch)
{
	case '1':
		echo "Addition value:".($n1+$n2);
	break;
	case '2':
		echo "Subtraction value:".($n1-$n2);
	break;
	case '3':
		echo "Multiplication value:".($n1*$n2);
	break;
	case '4':
		echo "Division value:".($n1/$n2);
	break;
	case '5':
		echo "Modulo value:".($n1%$n2);
	break;
	
	default:

	break;
}
?>
</h3>
</center>
</body>
</html>
