<?php
$v=2;
for($i=1;$i<=4;$i++)
{
	$l=$v;
	
	for($j=1;$j<=$i;$j++)
	{	
			echo "$l"." ";
	   		$l+=2;
	}
	$v+=2;		
	echo "<br>";
}
?>