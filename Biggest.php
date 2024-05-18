<html>
<body bgcolor=green>
<title>Biggest Among Three Numbers</title>
<center><h1>Biggest Among Three Numbers</h1></center>
<font color="lightblue">
<form action="" method="POST">
Enter the No1:<input type="text" name="n1"><br>
Enter the No2:<input type="text" name="n2"><br>
Enter the No3:<input type="text" name="n3"><br>
<input type="Submit" name="yes" value="Find"><br>
</form>
</font>
<font color="red">
<?php
       if(isset($_POST['yes']))
{
	$n1=$_POST['n1'];
	$n2=$_POST['n2'];
	$n3=$_POST['n3'];
	if($n1>$n2&&$n1>$n3)
	{
		echo "No $n1 is Biggest Number";
	}
	if($n2>$n3&&$n2>$n1)
	{
		echo "No $n2 is Biggest Number";
	}
	else
		echo"No $n3 is Biggest Number";
		
}
?>
</font>
</body>
</html>

