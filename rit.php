<?php
$con=new mysqli ("localhost","root","","rites");
if($con)
{
    $sql="insert into log (name,password)values ('".$_POST['t1']."','".$_POST['t2']."')";
    $r=mysqli_query ($con,$sql);
    
    
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
