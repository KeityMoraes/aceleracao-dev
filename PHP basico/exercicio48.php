<?php

$arrayUrl = array ("https://random-data-api.com/api/stripe/random_stripe",
"https://random-data-api.com/api/stripe/random_stripe",
"https://random-data-api.com/api/app/random_app",
"https://random-data-api.com/api/beer/random_beer",
"https://random-data-api.com/api/commerce/random_commerce",
"https://random-data-api.com/api/device/random_device",
"https://random-data-api.com/api/subscription/random_subscription");

$Arquivo = fopen("api.txt","w+");

foreach($arrayUrl as $urls){
    $conteudo = file_get_contents($urls);
    $array = json_decode($conteudo);
    fwrite($Arquivo,  print_r($array, TRUE)."\r\n");

}

fclose($Arquivo);

$ArquivoR = fopen("api.txt","r");
var_export(fread($ArquivoR,filesize("./api.txt")));

fclose($ArquivoR);

