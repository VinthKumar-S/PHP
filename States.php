<?php
$tamil=array("vnr"=>"Virudhunagar","mi"=>"Madurai","chn"=>"Chennai");
$kerala=array("k1"=>"Kollam","k2"=>"Kottayam","p"=>"Palakkad");
$Andhara=array("gr"=> "Guntur","ch"=>"Chittoor","n"=>"Nellore" );
/*foreach($tamil as $x => $x_value) 
{
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
 echo "<br>";
foreach($kerala as $x1 => $x_value1) 
{
  echo "Key=" . $x1 . ", Value=" . $x_value1;
  echo "<br>";

}
 echo "<br>";
foreach($Andhara as $x2 => $x_value2) 
{
  echo "Key=" . $x2 . ", Value=" . $x_value2;
  echo "<br>";
}
 echo "<br>";
*/
$c=array("TamilNadu"=>$tamil,"Kerala"=>$kerala,"Andhara"=>$Andhara);
foreach($c as $k => $list) 
{
  echo "<h1>$k</h1><br>";
  	# code...
  foreach($list as $k2=>$v)
  {
  	  echo "Key=" . $k2 . ", Value=" . $v;
  	  	echo"<br>";
  }
  
}
?>