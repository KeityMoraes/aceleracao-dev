<?php

$arrayValores = array ();
$conte = 0;
$soma = 0;

while (sizeof($arrayValores) <= 16){
    $arrayValores[$conte] = random_int(0,10);
    $conte += 1;
}

foreach($arrayValores as $v){
    $soma += $v;
}

$media = $soma/16;

var_export($arrayValores);
print_r($media);