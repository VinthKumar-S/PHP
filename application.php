<html>
<body bgcolor="#2abfba">
<center><h1>UG Application Form</h1></center>
<form method="POST">
<fieldset>
<legend><h4>Details</h4></legend>
<pre>
Enter the Name:       <input type="text" name="name">
Enter the Father's Name:<input type="text" name="fname">
Enter the Mother's Name:<input type="text" name="mname">
Enter the Mobile No:   <input type="text" name="Mob">
Enter the Mail ID:       <input type="text" name="mail">
Choose the Gender:<br><input type="radio" name="gn" value="1">Male
<input type="radio" name="gn" value="2">Female
Enter the Date of Birth:<input type="date" name="dob">
Address:<br><textarea name="address" row="4" cols="30">
</textarea>
Extra Curricular Activity:<br><input type="checkbox" name="cur[]" value="NCC">NCC
<input type="checkbox" name="cur[]" value="NSS">NSS
<input type="checkbox" name="cur[]" value="Sports">Sports
Select Course Name:<select name="course" id="course">
<option value="BCA">BCA</option>
<option value="BSC IT">BSC IT</option>
<option value="BSC CS">BSC CS</option>
</select>
<br><br><input type="submit" name="yes" value="Submit">
</pre>
</fielset>
</form>
<?php
	if(isset($_POST['yes']))
	{
		$name=$_POST['name'];
		$fname=$_POST['fname'];
		$mname=$_POST['mname'];
		$mno=$_POST['Mob'];
		$mail=$_POST['mail'];
		$gn=$_POST['gn'];
		$dob=date('y-m-d',strtotime($_POST['dob']));
		$cur=$_POST['cur'];
		$course=$_POST['course'];
		$address=$_POST['address'];
		echo"<center><h2>Your Details</h2></center>";
		echo "<pre>"; 
		echo "Name                      :$name<br>";
		echo "Father's Name             :$fname<br>";
		echo "Mother's Name             :$mname<br>";
		echo "Moblie Number             :$mno<br>";
		echo "Mail ID                   :$mail<br>";
		if($gn==1)
		{
			echo "Gender                    :Male<br>";
		}
		if($gn==2)
		{
			echo "Gender                    :Female<br>";
		}
		echo "Date of Birth             :$dob<br>";
		echo "Extra Curricular Activity :";
		if($cur!="")
		{
			foreach($cur as $key)
			{
				echo 	$key.",";
			}
			echo "<br>";
		}
		echo "Course                    :$course<br>";
		echo "Address                   :$address";
		echo "</pre>";		
	}
?>
</body>
</html>
