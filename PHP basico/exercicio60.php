<?php

function lePasta($dir){
    $conteudo = file_get_contents("https://jsonplaceholder.typicode.com/photos");
    if(is_dir($dir)){
        $scandir = scandir($dir);
        var_dump($scandir);
        $arquivo1 = fopen("$dir/$scandir[2]","w+");
        $arquivo2 = fopen("$dir/$scandir[3]","w+");
        $arquivo3 = fopen("$dir/$scandir[4]","w+");
        fwrite($arquivo1,$conteudo."\n\r");
        fclose($arquivo1);
        fwrite($arquivo2,$conteudo."\n\r");
        fclose($arquivo2);
        fwrite($arquivo3,$conteudo."\n\r");
        fclose($arquivo3);

    }else{
        echo "$dir não é um diretorio";
    }
    


}

//lePasta("60");

//unlink("60/arquivo2.txt");


function abreArquivo($arquivo){
    if(is_file($arquivo)){
        $leArquivo = fopen("$arquivo","r");
        $arqui = fread($leArquivo,filesize($arquivo));
        $array = json_decode($arqui,true);
        var_export($array);
        fclose($leArquivo);
    }else{
        throw new Exception("$arquivo não existe",1);
    }    
}


try{
    abreArquivo("60/arquivo3.txt");
}catch(Exception $erro){
    echo $erro->getMessage();

}







