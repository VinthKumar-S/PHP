<html>
<body bgcolor=pink>
<form action="" method="POST">
<font color=Blue>
<center><h1>String Operations</h1></center>
</font>
<center>
<font color=yellow>
<h3>
Enter First String:<input type="text" name="a"><br>
Enter Second String:<input type="text" name="b"><br>
</h3>
</font>
Length      :<input type="radio" name="in" value="1"><br>
Reverse     :<input type="radio" name="in" value="2"><br>
Comparision :<input type="radio" name="in" value="3"><br>
FirstLetter :<input type="radio" name="in" value="4"><br>
Enter here to Replace:<br>
Enter the String:	   <input type="text" name="main"><br>
Enter the Replacing String:<input type="text" name="alt"><br>
Enter the part of the String to replace:<input type="text" name="pls"><br>
Replace     :<input type="radio" name="in" value="5"><br>
<input type="submit" name="yes" value="Submit"><br>
</form>
<h3>
<?php
$ch=$_POST['in'];
$s1=$_POST['a'];
$s2=$_POST['b'];
$main=$_POST['main'];
$alt=$_POST['alt'];
$pls=$_POST['pls'];
switch($ch)
{
	case '1':
		echo "Length of the First String:".strlen($s1)."<br>";
		echo "Length of the Second String:".strlen($s2)."<br>";
	break;
	case '2':
		echo "Reverse of the First String:".strrev($s1)."<br>";
		echo "Reverse of the Second String:".strrev($s2)."<br>";
	break;
	case '3':
		if(strcmp($s1,$s2)==0)
		{
			echo "Both are Equal";
		}
		if(strcmp($s1,$s2)>0)
		{
			echo "Big string is:".$s1;
		}
		if(strcmp($s1,$s2)<0)
		{
			echo "Big string is:".$s2;
		}
	break;
	case '4':
		echo "First Character of All Words in First String:".ucwords($s1)."<br>";
		echo "First Character of All Words in Second String:".ucwords($s1)."<br>";
	break;
	case '5':
		$ans=str_replace($pls,$alt,$main);
		echo "Replaced String is:".$ans;
	break;
	
	default:

	break;
}
?>
</h3>
</center>
</body>
</html>
