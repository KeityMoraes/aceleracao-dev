<?php


$arquivo = fopen("dados.txt","w+");

$conte = 1;


while($conte <= 700){
    if ($conte%2 == 0){
        $arrayJson = json_encode($conte, true);
        fwrite($arquivo,$arrayJson."\r\n");

    }
    $conte += 1;
}

fclose($arquivo);

