<?php

$json = file_get_contents("https://rickandmortyapi.com/api");
$arrayJson = json_decode($json, true);

$array = array();



foreach($arrayJson as $key => $valor){
    array_push($array, $key);
}


var_dump($arrayJson);


if (is_null($array)){
    echo "Vc não pode continuar";
}elseif(is_array($array)){
    var_dump($array);
}else{
    echo"Variavel diferente de array";
}


