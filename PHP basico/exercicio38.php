<?php

function conversor(float $temperatura){
    $celsios = 0;
    $celsios = ($temperatura - 32)/1.8;
    echo "$temperatura graus fahrenheit convertido em celsius equivale a $celsios";
}

conversor(76);