<?php
    $con=mysql_connect("localhost","root","");
    if($con)
    {
        $n=$_POST["ename"];
        $id=$_POST["empid"];
        $basic=$_POST["basic"];
        $da=$basic*80/100;
        $hra=$basic*15/100;
        $pf=$basic*12/100;
        $gross=$basic+$da+$hra;
        $itax=$gross*0.1;
        $net=$gross-$pf-$itax;
        mysql_select_db("student",$con);
        $sql=("insert into pay values('$n','$id','$basic')");
        if($sql)
        {
            echo"Record Inserted Successfully";
        }
        else{
            echo"not Inserted";
        }
        mysql_close($con);
    }
?>