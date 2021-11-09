<?php

$valores = array(0, 10, 20, 30, 40, 50, 60, 70, 80, 90);
$i = sizeof($valores) - 1;

while($i >= 0){
    echo $valores[$i]."<br>";
    $i -= 1;
}