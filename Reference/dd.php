[8:17 PM, 8/4/2022] Vayana Sankar Class Mate: <?php
$id=$_POST['id'];
$name=$_POST['name'];
$con=mysqli_connect('localhost','root','','insert');
if($con)
{
	echo"connection success  <br>";
	$query="INSERT INTO ins VALUES('$id','$name')";
	$ins=mysqli_query($con,$query);
	if($ins)
	{
		echo"inserted    <br>";
	}
	else
	{
		echo"error".mysqli_error($con)."<br>";
	}
}
else
{
	echo"error".mysqli_error($con)."<br>";
}
?>
[8:18 PM, 8/4/2022] Vayana Sankar Class Mate: <?php
$id=$_POST['id'];
$con=mysqli_connect('localhost','root','','insert');
if($con)
{
	echo"connection success";
	$query="delete from ins where id='$id'";
	$delete=mysqli_query($con,$query);
	$result=mysqli_affected_rows($con);
	if($result)
	{
		echo"  record  deleted ";
	}
	else
	{
		echo "no record deleted ";
	}
}
    else
    {
    echo"error".mysqli_error($con)."<br>";
	}	
?>
[8:18 PM, 8/4/2022] Vayana Sankar Class Mate: <?php
$id=$_POST['id'];
$name=$_POST['name'];
$con=mysqli_connect('localhost','root','','insert');
if($con)
{
	echo"connection success  <br>";
	$query="update ins set    id='$id',name='$name' where  id='$id'   ";
	$update=mysqli_query($con,$query);
    $result=mysqli_affected_rows($con);
    echo "no of rows affected".$result."<br>";
   
	if($result)
	{
		echo"updated";
	}
	else
	{
		echo"error".mysqli_error($con);
	}
}
else
{
	echo"error".mysqli_error($con);
}
?>