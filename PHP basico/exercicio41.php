<?php

$json = file_get_contents("https://servicodados.ibge.gov.br/api/v1/localidades/paises");


$file = fopen("paises.txt", "w+");
fwrite($file, $json);

fclose($file);
