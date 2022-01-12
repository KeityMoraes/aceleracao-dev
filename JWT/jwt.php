<?php

$key = 'Ajhdkajsg665612AAA8]0';

$header = [
    'typ' => 'JWT',
    'alg' => 'HS256'
];

$payload = [
    'uid' => 1, 
    'email' => 'fulano@gmail.com', 
    'nivel de usuario'=> 'adm',
    'lista de favoritos' => 'list'

];

// converte para json

$headerJson = json_encode($header);
$payloadJson = json_encode($payload);

//encrypted base_64

$header = base64_encode($headerJson);
$payload =base64_encode($payloadJson);

//assinatura

$sign = hash('sha256',$header.".".$payload, $key,true);

$sign = base64_encode($sign);

echo $header.".".$payload.".".$sign;

?>