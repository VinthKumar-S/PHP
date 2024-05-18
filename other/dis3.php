<?php
$con=mysql_connect("localhost","root","","student");
if(!$con)
{
    die("could not connect:".mysql_error());
}
mysql_select_db("student",$con);
$result=mysql_query("select*from salary");
echo"<table border='1'>
<tr>
<th>name</th>
<th>empid</th>
<th>basic</th></tr>";
while($rec=mysql_fetch_array($result))
{
    echo"<tr>";
    echo"<td>".$rec['name']."</td>";
    echo"<td>".$rec['empid']."</td>";
    echo"<td>".$rec['basic']."</td>";
    echo"</tr>";
}
echo"</table>";
mysql_close($con);
?>