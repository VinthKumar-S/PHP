<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center><h1>
<?php
	$con=mysqli_connect('localhost','root','','mydb');
if($con)
{
	$user=$_POST['name'];
	$pass=$_POST['age'];
	$sql="SELECT * FROM Data";
	$f=0;
	$res=$con->query($sql);
		while ($row=$res->fetch_assoc()) {
			if ($user==$row["Name"] && $pass==$row["Pass"]) {
					# code...
				$f=1;
			}
			# code...
		}
		if($f)
		{
			echo "Welcome..";
		}
		else
		{
			echo "Wrong Password";
		}

	}
	else
		echo "Connection Failed";
?>
</h1></center>
</body>
</html>