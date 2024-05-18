<html>
<body bgcolor="#2abfba">
<font color="#115c1d">	
<form method="POST">
<fieldset>	
<legend><h4>Details</h4></legend>
<pre>	
1.Enter the Name:       <input type="text" name="name">

2.Enter the Father Name:<input type="text" name="fn">

3.Enter the Mother Name:<input type="text" name="mn">

4.Enter the Phone No:   <input type="text" name="Mno">

5.Enter the Mail ID:    <input type="text" name="mail">

6.Choose the Gender:<br><input type="radio" name="gn" value="1">Male <br><input type="radio" name="gn" value="2">Female

7.Date of Birth:        <input type="date" name="dob"><br>
8.Extra Curricular:<br><input type="checkbox" name="cur[]" value="NCC">NCC
<input type="checkbox" name="cur[]" value="NSS">NSS
<input type="checkbox" name="cur[]" value="SPORTS">SPORTS
9.Course Name:          <select name="course" id="course">
	<option value="BCA">BCA</option>
	<option value="IT">BSC IT</option>
	<option value="CS">BSC CS</option>
</select><br>
10.Address:<br><textarea name="address" rows="4" cols="30">
</textarea>	
<br><br><input type="submit"name="yes" value="   Submit   ">
</pre>
</fieldset>	
</form>
</font>
<?php
if(isset($_POST["yes"]))
{
   $name=$_POST["name"];
   $Fname=$_POST["fn"];
   $Mname=$_POST["mn"];
   $Pno=$_POST["Mno"];
   $mail=$_POST["mail"];
   $gen=$_POST["gn"];
   $dob=date('y-m-d',strtotime($_POST["dob"]));
   $cur=$_POST["cur"];
   $course=$_POST["course"];
   $address=$_POST["address"];
   echo "Name:$name<br>";
   echo "Father Name:$Fname<br>";
   echo "Mother Name:$Mname<br>";
   echo "Mobile Number:$Pno<br>";
   echo "Mail ID:$mail<br>";
   echo "Gender:$gen<br>";
   echo "Date of Birth:$dob<br>";
   echo "Extra-Curricular";
   if($cur!="")
   {
   	foreach ($cur as $key) 
   	{
   		# code...
   		echo "$key".",";
   	}
   	echo "<br>";
   } 
  echo "Course:$course";
  echo "Address:$address";      
 }  
?>
</body>
</html>