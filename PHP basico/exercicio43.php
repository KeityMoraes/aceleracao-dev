<?php

$dir = "img";
$scan = NULL;

$scan = scandir($dir);
$info = NULL;
$data = array();

foreach($scan as $img){
    $filename = "img/".$img;
    if(in_array($img, array(".", ".."))){
        //continue
    }else{
        $info = pathinfo($img);
        array_push($data, $info);
    }
}

var_dump($data);