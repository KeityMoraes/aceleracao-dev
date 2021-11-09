<?php

function quociente(int $v1,int $v2){
    if($v2 != 0){
        $q = $v1/$v2;
        echo "$q<br>";
    }else{
        echo "Divisao por zero<br>";
    }
}