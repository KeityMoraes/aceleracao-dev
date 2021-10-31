<?php

function nomes(array $nomes){
    
    foreach($nomes as $n){
        echo "$n <br>";
    }

}

$arrayNomes = array (
    "Jorge","Antonio", "Leilane","Jessica","Fernando","julha","José");
nomes($arrayNomes);