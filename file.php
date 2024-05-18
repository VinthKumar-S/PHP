<html>
<body>
<form method="POST">
Choose the file:<br>
<input type="file" name="f" multiple required><br><br>
<textarea name="text" rows="4" cols="50" required></textarea><br>	
<input type="submit" name="yes" value="save">
</form>
<?php
  if(isset($_POST['yes']))
  {
  	 $d=$_POST['f'];
  	 $t=$_POST['text'];
     $f=fopen($d,'w');
     fwrite($f,$t);
     fclose($f);
     echo "File Writed";  	
  }
?>	
</body>
</html>	