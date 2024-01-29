<?php
$con= new mysqli("localhost","root","","sun");
if($con)
{
    $sql="insert into form(name,password,gender,eligibale,age,address,email,pincode,date_of_birth) values('".$_POST['t1']."','".$_POST['t2']."','".$_POST['gender']."','".$_POST['eligibale']."','".$_POST['age']."','".$_POST['t3']."','".$_POST['t4']."','".$_POST['t5']."','".$_POST['t6']."')";
    echo $sql;
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