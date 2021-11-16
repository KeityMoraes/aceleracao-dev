<?php

$conte = 0;
$array1 = array();
$array2 = array();

while($conte <= 20){
    $random = random_int(1,100);
    $ramdom2 = random_int(1,100);
    
    array_push($array1,$random);
    array_push($array2,$ramdom2);

    $conte += 1;
    
}

function soma(int $v1, int $v2){
    $resul = $v1 + $v2;

    if($resul < 0){
        return 0;
    }else{
        return $resul;
    }
}

$arquivo = fopen("arrays.txt","w+");

$conte2 = 0;

while($conte2 <= 20){
    $soma = soma($array1[$conte2],$array2[$conte2]);
    $concatena = $array1[$conte2]." + ".$array2[$conte2]." = ".$soma;
    fwrite($arquivo,$concatena."\n\r");

    $conte2 += 1;
}

fclose($arquivo);
