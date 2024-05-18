<html>
<body>
<form  method="POST">
Enter a name:<input type="text" name="name"><br>
Enter a Rollno:<input type="text" name="NO"><br>
Enter the mark 1:<input type="text" name="m1"><br>
Enter the mark 2:<input type="text" name="m2"><br>
Enter the mark 3:<input type="text" name="m3"><br>
Enter the mark 4:<input type="text" name="m4"><br>
Enter the mark 5:<input type="text" name="m5"><br>
<input type="submit" name="yes" value="submit"><br>
</form>
<?php
	$name=$_POST['name'];
   $NO=$_POST['NO'];
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
   if($avg<=80 && $avg>=60)
  {
  	 $grade="Grade B";
  }
   if($avg<=60 && $avg>=40)
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
echo "<table style=width:50%>
<tr>
<th> Name  </th>
<th> Rollno </th>
<th> Mark1  </th>
<th> Mark2  </th>
<th>Mark3</th>
<th>Mark4</th>
<th>Mark5</th>
<th>Total</th>
<th>Average</th>
<th>Result</th>
</tr>
 <tr>
    <td>$name</td>
    <td>$NO</td>
    <td>$m1</td>
    <td>$m2</td>
    <td>$m3</td>
    <td>$m4</td>
    <td>$m5</td>
    <td>$total</td>
    <td>$avg</td>
     <td>$grade</td>
  </tr>
</table>";
?>
</body>
</html>