<html>
<body>
<form action="" method="POST">
Enter a Number:<input type="text" name="n1">
<input type="submit" name="yes" value="submit"><br>
</form>
<?php
   $r=1;
       $n1=$_POST['n1'];

   for($i=1;$i<=$n1;$i++)
   {
   		$r=$r*$i;
   }
   echo "Factorial Value is:$r";
?>
</body>
</html>