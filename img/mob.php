<html>
<body bgcolor=dodgerblue>
<center><h1>Online Shopping</h1></center>
<center><h2>VK Showroom</h2></center>
<center>
<form method="POST">
<table border="10" style:width="60%" bgcolor=pink>
<tr bgcolor=violet><td><img src="p1.jpg" width=70 hight=50><br>Corbon 8:-12,000-<input type="checkbox" name="pay[]" value="12000"></td>
<td><img src="p2.jpg" width=70 hight=50><br>Realme C38:-18,000-<input type="checkbox" name="pay[]" value="18000"></td>
<td><img src="p3.jpg" width=150 hight=100><br>OnePlush:-20,000-<input type="checkbox" name="pay[]" value="20000"></td>
<td><img src="p4.jpeg" width=110 hight=50><br>Vivo y20:-14,000-<input type="checkbox" name="pay[]" value="14000"></td>
</tr>
<tr bgcolor=violet>
<td><img src="p5.jpeg" width=150 hight=50><br>Motrola:-16,000-<input type="checkbox" name="pay[]" value="16000"></td>
<td><img src="p6.jpeg" width=150 hight=50><br>Redme:-17,000-<input type="checkbox" name="pay[]" value="17000"></td>

<td><img src="p7.jpeg" width=150 hight=50><br>Oppo k10:-12,000-<input type="checkbox" name="pay[]" value="12000"></td>
</tr>
</table>
<center><input type="submit" name="yes" value="Submit"></center>
</form>
<?php
if(isset($_POST["yes"]))
{
  $amt=$_POST["pay"];$tot=0;$i=1;
foreach($amt as $key)
{
  $tot+=$key;
  echo "Item-".$i.":RS.".$key."<br>";
	$i++;
}
echo "Total Amount:RS.$tot<br>";
echo "Your product will delivered with in 10days.";
}
?>
</center>
</body>
</html>
