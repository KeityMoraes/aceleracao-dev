<?php

$conte = 0;
$arrayFile = array();


while($conte <= 150){
    if(is_dir($conte)){
        $scandir = scandir($conte);
        if(count($scandir) < 3){
            rmdir($conte);
            echo "Pasta $conte vazia, foi excluida<br>";
        }else{
            $scandir = scandir($conte);
            $fileName = pathinfo($scandir[2]);
            array_push($arrayFile,$fileName['filename']);
        }

    }
    $conte += 1;
}

var_dump($arrayFile);

