<?php

$clientes = array("Joaquim" => "28,m", "Maria" => "41,f", "Pedro" => "18,m", "Joana Silva" => "58,f", "João Lopes" =>
"21,m", "Joana" => "15,f", "Fernanda" => "25,f");

$masculino = array();
$feminino = array();

foreach($clientes as $key => $valor){
    echo "$key: ";
    if(strpos($valor,",")){
        $sexo = substr($valor,-1);
        if ($sexo == "m"){
            array_push($masculino, $key);            
        }elseif($sexo == "f"){
            array_push($feminino, $key);
        }
    }
    echo substr($valor, -4,2)." anos sexo: $sexo <br>";

}

var_dump($feminino);
var_dump($masculino);

