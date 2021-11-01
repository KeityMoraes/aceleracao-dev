<?php

$array1 = array(1,2,4);
$array2 = array(5,6,7);
$array3 = array(8,9,10);
$array4 = array(11,12,13);
$array5 = array(14,15,16);

$merge = array_merge($array1,$array2,$array3,$array4,$array5);

foreach($merge as $key => $values){
    echo "$key : $values <br>";
}

var_export($merge);
