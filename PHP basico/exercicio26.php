<?php

$var1 = random_int(0,99);
$var2 = random_int(0,99);
$var3 = random_int(0,99);

function verificapar($valor)
{
    while(true){
        if($valor%2 == 0){
            echo "$valor <br>";
        }else{
            $valor +=1;
            echo "$valor <br>";
        }
        break;
    }
}

verificapar($var1);
verificapar($var2);
verificapar($var3);
