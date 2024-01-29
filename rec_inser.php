<?php
$con=new mysqli("localhost","root","","raju");
if($con)
{
    $sql="insert into school values(".$_POST['t1'].",'".$_POST['t2']."',".$_POST['t3'].",".$_POST['t4'].")";
    $r=mysqli_query($con,$sql);
    if($r){
        echo "New record created sucesfully";
    }else{
        echo "Error";
    }
} 
else{
    echo"New connected";
}
mysqli_close($con);
?> 