<?php
$con=mysql_connect("localhost","root","","electric");
if(!$con)
{
    die("could not connect:".mysql_error());
}
mysql_select_db("electric",$con);
$result=mysql_query("select*from cal");
echo"<table border='1'>
<tr>
<th>name</th>
<th>place</th>
<th>current</th>
<th>punit</th>";
while($rec=mysql_fetch_array($result))
{
    echo"<tr>";
    echo"<td>".$rec['name']."</td>";
    echo"<td>".$rec['place']."</td>";
    echo"<td>".$rec['per']."</td>";
    echo"<td>".$rec['cur']."</td>";
    echo"</tr>";
}
echo"</table>";
mysql_close($con);
?>