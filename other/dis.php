<?php
$con=mysql_connect("localhost","root","","student");
if(!$con)
{
    die("could not connect:".mysql_error());
}
mysql_select_db("student",$con);
$result=mysql_query("select*from mark");
echo"<table border='1'>
<tr>
<th>name</th>
<th>rno</th>
<th>tamil</th>
<th>english</th>
<th>maths</th>";
while($rec=mysql_fetch_array($result))
{
    echo"<tr>";
    echo"<td>".$rec['name']."</td>";
    echo"<td>".$rec['rno']."</td>";
    echo"<td>".$rec['tamil']."</td>";
    echo"<td>".$rec['english']."</td>";
    echo"<td>".$rec['maths']."</td>";
    echo"</tr>";
}
echo"</table>";
mysql_close($con);
?>