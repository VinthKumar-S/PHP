<html>
<body>
<font face="Comic Sans MS" color="red" size=5>
<?php

// Create connection
$conn = new mysqli("localhost", "root", "vhnsnc");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}
echo "<br>";
// Create Table
mysqli_select_db($conn,"myDB") or die("Could not open the db ");
$sql = "create table student(id INT(6) primary key,name VARCHAR(30),age INT(3))";

if ($conn->query($sql) === TRUE) {
    echo "Table student created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
echo "<br>";
$id=$_POST["id"];
$name=$_POST["na"];
$age=$_POST["age"];

$sql = "INSERT INTO student values('$id','$name','$age')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql="select * from student";
$result = $conn->query($sql);
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
$conn->close();

?>
<br><a href="home.html">Home</a>
</>
</body>
</html>
