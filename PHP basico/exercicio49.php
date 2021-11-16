<?php

$conte = 0;


while($conte <= 150){
    if(!is_dir($conte) and $conte%2 == 0){
        mkdir($conte);
        echo "Pasta $conte criado<br>";
        //$Arquivo = fopen("$conte/$nomes.txt","w+");
    }elseif(!is_dir($conte) and $conte%2 != 0){
        mkdir($conte);
        $data = date('d-m-y \á\s H:i');
        $arquivos = fopen("$conte/log-$data.txt","w+");
        echo "arquivo log-$data.txt criado<br>";
        $infos = pathinfo($conte);
        var_dump($infos);
        fclose($arquivos);
    }else{
        echo "Já existe uma pasta com o nome $conte<br>";
    }
    $conte += 1;
}






