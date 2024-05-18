<!DOCTYPE html>
<html>
<body bgcolor="red">
<h1>
<center>	
<?php  
session_start();
   
if(isset($_SESSION['views']))
    $_SESSION['views'] = $_SESSION['views']+1;
else
    $_SESSION['views']=1;
      
echo" No of Views : ".$_SESSION['views'];
  
?>
</center>
</h1>
</body>
</html>

