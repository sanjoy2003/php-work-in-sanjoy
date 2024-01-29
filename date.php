<?php
$d=date("d  S F Y,g:i A");
echo "the date is:$d<br>";
$year=date("Y");
echo "copy right 2022 $year| all right reciverd";
echo"<br>";
$favcol =array('subhom'=>'red','rohan'=>'yellow','harry'=>'green',);


foreach($favcol as$key=>$value){
    echo( "<br>favourite color $key is:$value");
}
?>