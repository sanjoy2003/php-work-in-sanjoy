<?php
$con= new mysqli("localhost","root","","sanjib");
if($con)
{
    $sql="insert into fire(name,age,gender,email,phone,other) values('".$_POST['t1']."',".$_POST['t2'].",'".$_POST['t3']."','".$_POST['t4']."','".$_POST['t5']."')";
    $r=mysqli_query($con,$sql);
    if($r){
        echo "new record created sucessfully";

    }
    else{
        echo "Error";
    }
}
else{
    echo "Not connected";
}
mysqli_close($con);
?>