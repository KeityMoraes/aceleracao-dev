<?php


function tabuada($valor){
    $conte = 0;
    while($conte <= 10){
        $result = $valor*$conte; 
        echo "$valor X $conte = $result <br>";
        $conte += 1;
    }
}

tabuada(7);
