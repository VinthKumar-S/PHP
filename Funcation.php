<?php
$no1=10;
$no2=20;
function arith($no1,$no2) //Get parameters on here
{
	echo  "Value 1=$no1";
	echo "<br>";
	echo  "Value 2=$no2";
	echo "<br>";
	return $no1+$no2;//returning the output value
}

 echo arith("$no1","$no2");//funcation calling and passing value to the parameters
?>