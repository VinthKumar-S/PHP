<html>
<body bgcolor="red">
<center><h1> LAST VISITE TIME WEB PAGE</h1></center>
<br>
<?php
date_default_timezone_set('Asia/Calcutta');
 
//Calculate 60 days in the future
//seconds * minutes * hours * days + current time
 
$inTwoMonths = 60 * 60 * 24 * 60 + time();
setcookie('lastVisit', date("g:i:s - d/m/y"), $inTwoMonths);
if(isset($_COOKIE['lastVisit']))
 
{
$visit = $_COOKIE['lastVisit'];
echo "<center>";

echo "<br> <br>YOUR LAST VISITED - ". $visit;
echo "</center>";
}
else
echo "You've got some stale cookies!";
?>
</body>
</html>