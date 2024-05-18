<html>
<body>
<form action="" method="POST">
Enter a Number:<input type="text" name="n1">
<input type="submit" name="yes" value="submit"><br>
</form>
<?php
   $r=1;
       $count=$_POST['n1'];
       $n1=0;
       $n2=1;
       $n3;
       echo "Fibonacci Value:".$n1.",".$n2;

   for($i=2;$i<=$count;$i++)
   {
   		$n3=$n1+$n2;
   		   echo ",".$n3;
        $n1=$n2;
		$n2=$n3;   
  }
   
?>
</body>
</html>