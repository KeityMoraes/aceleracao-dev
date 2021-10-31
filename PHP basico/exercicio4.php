<?php

$pessoa1 = array(
    "nome" => "Pedro",
    "idade" => 21,
    "anonasc" => 2000
); 

$pessoa2 = array(
    "nome" => "Lara",
    "idade" => 25,
    "anonasc" => 1996
);

foreach($pessoa1 as $key => $values){
    echo "$key : $values <br>";
}
echo "<br>";
foreach($pessoa2 as $key => $values){
    echo "$key : $values <br>";
}

$unir = array_merge($pessoa1,$pessoa2);

var_export($unir);