

<?php
	function count_char($str){		
     /* Checks each character of string*/
     $alp=0;
     $digits=0;
     $splch=0;
  
    for ($i=0; $i <strlen($str) ; $i++) { 
    	if (ctype_alpha($str[$i])) {
    		# code...
    		$alp++;
    	}
    	else if(ctype_digit($str[$i]))
    	{
    		$digits++;
    	}
    	else
    	{
    		$splch++;
    	}
    	# code...
    }
   $out="alphabets:".$alp.",digits".$digits.",special characters:".$splch;
   return $out;
}
 $str="vk3228433@gmail.com";
       echo "Count total number of alphabets, digits and special characters :<br>";
       echo "--------------------------------------------------------------------<br>"; 	
       echo "Input the string :$str<br>";

       echo count_char($str);
?>