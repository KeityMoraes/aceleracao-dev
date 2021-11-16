<?php

$arrayNomes = array("Joana","Eleven","Celso","Fernanda","Louis","Jeniffer",
"Lilia","Gustavo","Wesley","Keity","Felix","Fernando","Iasmin","Laia","Willian");


foreach($arrayNomes as $nomes){
    if(!is_dir($nomes)){
        mkdir($nomes);
        //$Arquivo = fopen("$nomes.txt","w+");
    }else{
        echo "Já existe um arquivo com o nome $nomes<br>";
    }
}

foreach($arrayNomes as $nomes2){
    $pasta = opendir($nomes2);
    $Arquivos = fopen("$nomes2/$nomes2.txt","w+");
    fwrite($Arquivos,$nomes2."\n\r");
    fclose($Arquivos);
}