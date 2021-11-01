<?php

function soma(int $var1, int $var2){
    $soma = $var1 + $var2;
    return $soma;
}

function parimpar(int $var1){
    if($var1%2==0){
        echo "<br>O valor é par<br>";
    }else{
        echo "<br>O valor é impar<br>";
    }
}

function contacaracter(string $var1){
    $conte = strlen($var1);

    return $conte;
}