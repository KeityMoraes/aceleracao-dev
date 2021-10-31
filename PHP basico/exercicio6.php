<?php


$arrayValores = array(4,5.6,9,10,5,7);

function media(array $valores): float{
    $soma = 0;
    foreach ($valores as $value){
        $soma += $value;
        $media = $soma/sizeof($valores);
    }
    return $media;
} 


echo media($arrayValores);