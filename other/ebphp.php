<?php
$con=mysqli_connect("localhost","root","","electric");
if($con)
{
    echo"connected";
    $name=$_GET['n'];
    $place=$_GET['place'];
    $current=$_GET['cur'];
    $punit=$_GET['pur'];
    $unit=$current-$punit;
    switch($place)
    {
        case 1:
            if($unit<=100)
            {
                $a=0;
                echo"no payment amount";
            }
            else if($unit>101&&$unit<=300)
            {
                $a=$unit*2;
                echo"your amount is $a";
            }
            break;
        case 2:
            if($unit<=100)
            {
                $a=$unit*2;
                echo"your amount is $a";
            }
            else if($unit>101&&$unit<=300)
            {
                $a=$unit*4;
                echo"your amount is $a";
            }
            else
            {
                $a=$unit*6;
                echo"your amount is $a";
            }
            break;

    }
    $Query="insert into cal values('$name','$place','$punit','$current')";
    $ins=mysqli_query($con,$Query);
    if($ins)
    {
        echo"Inserted";
    }
    else
    {
        echo"error".mysql_error($con);
    }
}
?>