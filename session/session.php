<?php
session_start();
$_SESSION['user']='Vinith';
echo "Session Created";
echo "<a href=file.php>Click Here</a>";
?>