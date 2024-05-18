<html>
<body>
	<form method="POST">
<table style="padding: 80px">
	<tr><td><img src="Cloud1.png" height=200 width=200/></td>
	<td><img src="Cloud2.png" height=200 width=200/></td>
	<td><img src="Cloud3.png" height=200 width=200/></td>
	<td><img src="Cloud4.png" height=200 width=200/></td></tr>
	<tr><td>"10,000":<input type="checkbox" name="pay[]" value="10000"></td><td>"20,000":<input type="checkbox" name="pay[]" value="20000" >
	</td><td>"15,000":<input type="checkbox" name="pay[]" value="15000"></td><td>"18,000":<input type="checkbox" name="pay[]" value="18000" ></td>
</tr>
<tr><td><input type="submit" name="yes" value="submit"></td></tr>
</table>

</form>
<?php
if(isset($_POST['yes']))
{
$amt=$_POST["pay"];
$pay=0;
if($amt!="")
{
	foreach ($amt as $key) {
		# code...
		$pay+=$key;
	}
	echo "Total Amount:".$pay;
}
else
  echo "Payment Not Selected:";
}
?>	
</body>
</html>