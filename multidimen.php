<?php
echo "welcome to multidimesion array <br>";
$multiDim=array(array(2,4,5,6),
array(1,2,3,1),
array(1,21,24,9),
array(2,34,7,8),

);
echo var_dump($multiDim);
for($i=0;$i<count($multiDim);$i++){
    for($j=0;j<count($multiDim[i]);$j++){
        echo $multiDim[$i][$j];
        echo " ";
    }
    echo"<br>";

?>