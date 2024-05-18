<?php
$con=mysqli_connect("localhost","root","","student");
if($con->connect_error)
{
    echo $con->connect_error;
    die();
}
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $rno=$_POST['rno'];
    $tamil=$_POST['tamil'];
    $english=$_POST['english'];
    $maths=$_POST['maths'];
    $total=$tamil+$english+$maths;
    $avg=$total/3;
    $sql="INSERT INTO mark(name,rno,tamil,english,maths)VALUES('$name','$rno','$tamil','$english','$maths')";
    if($con->query($sql))
    {
        echo"$name<br>";
        echo"$rno<br>";
        echo"$tamil<br>";
        echo"$english<br>";
        echo"$maths<br>";
        echo"$total<br>";
        if($tamil>40&&$english>40&&$maths>40)
        {
            echo"you are pass";
            if($avg<=100&&$avg>80)
            {
                echo"you are grade A";
            }
            elseif($avg<=80&&$avg>60)
            {
                echo"you are grade B";
            }
            elseif($avg<=60&&$avg>=40)
            {
                echo"you are grade C";
            }
        }
        else"Sorry you are fail";
    }
}
?>