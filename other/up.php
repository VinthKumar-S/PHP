<html>
<body>
	<form action="" method="post" enctype="multipart/form-data">
Enter the file:<input type="file" name="up" id="up" ><br>
<input type="submit" value="upload" name="yes"> 	
</form>
<?php
if(isset($_POST['yes']))
{
$tar='f:/';

$tar=$tar.basename($_FILES['up']['name']);
if(move_uploaded_file($_FILES['up']['tmp_name'],$tar))
{
	echo "<br>File is Uploaded Sucessfully";

}
else
{
	echo "<br>File is not Uploaded";
}}
?>
</body></html>