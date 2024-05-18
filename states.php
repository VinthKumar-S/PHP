<html>
<body bgcolor="pink">
<center><h1>Demonstrate Associative Array</h1></center>
<?php
$tamil=array("vnr"=>"Viruthunagar","mi"=>"Madurai","chi"=>"Chennai");
$kerala=array("klm"=>"Kollam","ktm"=>"Kottayam","pd"=>"Palakad");
$andhara=array("gr"=>"Guntur","chr"=>"Chittoor","nr"=>"Nellore");
echo "<h4>Cities of TamilNadu</h4>";
foreach($tamil as $k => $v)
{
	echo "Key:".$k." Value:".$v."<br>";
}

echo "<h4>Cities of Kerala</h4>";
foreach($kerala as $k1=>$v1)
{
		echo "Key:".$k1." Value:".$v1."<br>";
}

echo "<h4>Cities of Andhara Pradash</h4>";
foreach($andhara as $k1=>$v1)
{
		echo "Key:".$k1." Value:".$v1."<br>";
}

echo "<h1>Combine Three Arrays</h1>";
$c=array("TamilNadu"=>$tamil,"Kerala"=>$kerala,"Andhra Pradash"=>$andhara);
foreach($c as $key=>$list)
{
		echo "<h3>".$key."</h3>";
		foreach($list as $k1=>$v1)
		{
			echo $k1."->".$v1."<br>";
		}
}
?>
</body>
</html>
