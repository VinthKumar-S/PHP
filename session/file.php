<!DOCTYPE html>
<html>
<body>
<form action="" method="POST">
<center>
<input type=submit name=submit value=Unset>
<input type=submit name=submit1 value=Destroy>
</form>
<?php
session_start();
$user=$_SESSION['user'];
echo "<h1>Hello".$user."</h1>";
$yes=$_POST['submit'];
if(isset($yes))
{
	session_unset();
	echo "All session are Variables are Removed";
}
$yes1=$_POST['submit1'];
if(isset($yes))
{
	session_destroy();
	echo "All session are Destroyed";
}	
?>
</center>
</body>
</html>