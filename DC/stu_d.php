<!DOCTYPE html>
<html>
<body>
	<font face="Comic Sans MS" color="red" size=5>
<?php		
$con=mysqli_connect('localhost','root','',);
if($con)
{
	echo "Connection Success<br>";
		$sql = "CREATE DATABASE dd";
     try
       {
  	if ($con->query($sql) === TRUE) 
	{
    	echo "Database created successfully";
	}
       } 
        catch(Exception $e)
	{
    	echo "Error creating database: " . $con->error;
	}
 
echo "<br>";
// Create Table
	mysqli_select_db($con,"dd") or die("Could not open the db ");
	$sql = "create table student(id INT(6) primary key,name VARCHAR(30),age INT(3))";
         try
        {
	if ($con->query($sql) === TRUE) {
    	echo "Table student created successfully";
	} 
}
       
	catch(Exception $e)

	{
    	echo "Error creating table: " . $con->error;
	}
	echo "<br>";

$id=$_POST["id"];
$name=$_POST["na"];
$age=$_POST["age"];

	mysqli_select_db($con,"dd") or die("Could not open the db ");
$sql = "INSERT INTO student values('$id','$name','$age')";
try
{
if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
}
}

 catch(Exception $e) {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$sql="select * from student";
$result = $con->query($sql);
echo"<table border=4 width=300>";
echo"<tr><th>student id</th><th>Name<th>Age</th></tr>";
while($row=$result->fetch_assoc())
{
 echo"<tr><td>";
 echo $row['id']." </td>";
 echo "<td>". $row['name']." </td>";
 echo "<td>". $row['age']." </td>";
}
echo"</table>";
$con->close();
}
else
 echo "Connection Wrong";
?>
</body>
</html>
