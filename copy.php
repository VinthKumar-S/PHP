<html>
<center><h1>File Copy</h1></center>
<body bgcolor="tomato">
<form method="POST">
Enter the File Name with .Extension:<input type="text" name="t1"><br><br><br>
Enter the  copyFile Name with .Extension:<input type="text" name="t2"><br><br><br>
<input type="submit" name="submit" value="COPY">
</form>
<?php
if(isset($_POST['submit']))
{
	$a=$_POST['t1'];
	$b=$_POST['t2'];
	$f=fopen($a,"r") or die('Unable to open File.');
	echo "Content of the File $a";
	while(!feof($f))
	{
		$d=fgets($f);
		echo "<br>".$d;
	}
	$f1=fopen($b,"w");
	$x=copy($a,$b);
	fclose($f);
	fclose($f1);
	if($x==1)
		echo "<br>File Copied Sucessfully";
	else
		echo "<br>Error in copy your file";
}
?>
</body>
</html>
