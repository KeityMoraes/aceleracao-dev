<?php

//mkdir("alunos");
//mkdir("professores");

$pastas = array("alunos","professores","pastateste");

$arquivoAlunos = fopen("alunos/arquivo.txt","w+");


fclose($arquivoAlunos);

function diretorioVazio($dir){
    if(is_dir($dir)){
        $scandir = scandir($dir);
        if (count($scandir) < 3){
            throw new Exception("A pasta $dir não contem arquivos", 1);
        }else{
            throw new Exception("diretorio $dir contém arquivo", 2);
        
        }
    }else{
        throw new Exception("$dir não é um diretorio", 3);

    }
}

$arquivoEx = fopen("log.txt","w+");

foreach($pastas as $pasta){
    try{
        diretorioVazio($pasta);
    }catch(Exception $error){
        echo $error->getMessage();
        $mensagenErro = $error->getMessage();
        echo " linha: ".$error->getLine()."<br>";
        $Line = " linha: ".$error->getLine();
    }
    
    fwrite($arquivoEx, $mensagenErro.$Line."\n\r");
    
    
}

fclose($arquivoEx);



