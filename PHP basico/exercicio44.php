<?php

$link = "https://viacep.com.br/ws/GO/Goiania/independencia/json/";
//inicializei o curl
$ch = curl_init($link);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

$resposta = curl_exec($ch);
$array = json_decode($resposta, true);

//fecha conexão
curl_close($ch);

$arrayCep = array();

foreach ($array as $key => $valor){
    foreach($valor as $key2 => $valor2){
        if ($key2 == "cep"){
            array_push($arrayCep,$valor2);
        }
    }
}



$ArquivoCep = fopen("ceps.txt","w+");

foreach($arrayCep as $key3 => $valor3){
    if($key3 <= 15){
        fwrite($ArquivoCep,$valor3."\n\r");
        
    }
}

fclose($ArquivoCep);
