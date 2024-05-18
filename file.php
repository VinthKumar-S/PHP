<htmL>
<body bgcolor="tomato">
<form method="POST">
<center><h1>File Creation</h1></center>
Write a text on here:<br>
<textarea name="text" rows="4" cols="50"></textarea><br>
Enter your file name:<input type="text" name="f"><br>
Select file Extention:
<select name="ext">
<option value=".txt">TXT</option>
<option value=".html">HTML</option>
<option value=".java">JAVA</option>
<option value=".php">PHP</option>
</select><br>
<input type="submit" name="yes" value="submit">
</form>
<?php
 if(isset($_POST["yes"]))
{
 $txt=$_POST["text"];
 $f=$_POST["f"];
 $ext=$_POST["ext"];
  $fn=$f.$ext;
  echo "File Name:".$fn;
   $fo=fopen($fn,"w");
   fwrite($fo,$txt);
  fclose($fo);
  echo "<br><center><h3>File Saved</h3></center>";
}
?>
