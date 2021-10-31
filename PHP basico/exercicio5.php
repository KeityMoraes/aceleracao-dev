<?php


function calc($v1,$v2): float{

    $soma = $v1+$v2;
    $mult = $soma * $v1;

    return $mult;
}

echo calc(2,9);