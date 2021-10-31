<?php

$notas = array(8,6.5,9);
$soma = 0;

foreach ($notas as $value){
    $soma += $value;
}

$media = $soma/sizeof($notas); 

echo "$media";
var_dump($media);