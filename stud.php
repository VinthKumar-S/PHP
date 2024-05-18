<html>
<body bgcolor=violet>
<center><h1>Student MarkList</h1></center>
<form action="" method="POST">
Enter a name:<input type="text" name="name"><br>
Enter a RollNumber:<input type="text" name="No"><br>
Enter the Mark for DataStructure:<input type="text" name="m1"><br>
Enter the Mark for RDBMS:<input type="text" name="m2"><br>
Enter the Mark for Java:<input type="text" name="m3"><br>
Enter the Mark for English:<input type="text" name="m4"><br>
Enter the Mark for Tamil:<input type="text" name="m5"><br>
<input type="submit" name="yes" value="submit">
</form>
<?php
	$name=$_POST['name'];
	$No=$_POST['No'];
	$m1=$_POST['m1'];
	$m2=$_POST['m2'];
	$m3=$_POST['m3'];
	$m4=$_POST['m4'];
	$m5=$_POST['m5'];
	$total=$m1+$m2+$m3+$m4+$m5;
	$avg=$total/5;
	$grade;
	if($m1>30&&$m2>30&&$m3>30&&$m4>30&&$m5>30)
	{
		if($avg>=80)
		{
			$grade="Grade A";
		}
		if($avg<=80&&$avg>=60)
		{
			$grade="Grade B";
		}
		if($avg<=60&&$avg>=40)
		{
			$grade="Grade C";
		}
		if($avg<40)
		{
			$grade="Grade D";
		}
	}
	else
	{
		$grade="Fail";
	}
	
	echo "<table border='2' style=width:60%> <tr><th>Name</th> <th>Roll No</th> <th>DataStructure</th> <th>RDBMS</th> <th>Java</th> <th>English</th> <th>Tamil</th> <th>Total</th> <th>Average</th> <th>Result</th></tr> <tr><td>$name</td> <td>$No</td> <td>$m1</td> <td>$m2</td> <td>$m3</td> <td>$m4</td> <td>$m5</td> <td>$total</td> <td>$avg</td> <td>$grade</td></tr> </table>";
	?>
	</body>
	</html>
