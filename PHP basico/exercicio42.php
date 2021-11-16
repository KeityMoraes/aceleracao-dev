<?php


$fileL = fopen("lista.csv","w+");

if(file_exists("paises.txt")){
    $file = fopen("paises.txt" , "r");
    $cabecalho = explode(",", fgets($file));
    foreach($cabecalho as $key => $valor){
        fwrite($fileL, $valor.",");
    }
}

fclose($fileL);
fclose($file);
