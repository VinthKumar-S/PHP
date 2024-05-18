<html>
<body bgcolor="Violet">
<form action="" method="POST">
Enter the Frist No:<input type="text" name="n1"><br>
Enter the Second No:<input type="text" name="n2"><br>
Addition<input type="radio" name="ch" value="1"><br>
Subtraction<input type="radio" name="ch" value="2"><br>
Multiplication<input type="radio" name="ch" value="3"><br>
Division<input type="radio" name="ch" value="4"><br>
Modules<input type="radio" name="ch" value="5"><br>
<input type="submit" name="yes" value="submit"><br>
</form>
<?php
	$ch=$_POST['ch'];
    $n1=$_POST['n1'];
  	$n2=$_POST['n2'];

	switch ($ch) {
		case '1':
			echo "Addition:".($n1+$n2);
			break;
		case '2':
			echo "Subtraction:".($n1-$n2);
			break;

	    case '3':
			echo "Multiplication:".($n1*$n2);
			break;
		case '4':
			echo "Division:".($n1/$n2);
			break;
		case '5':
			echo "Modules:".($n1%$n2);
			break;		
		
		default:
			# code...
			break;
	}

?>
</body>
</html>