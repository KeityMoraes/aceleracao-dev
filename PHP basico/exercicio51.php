<?php

$arrayJason = array();

$hash = hash('sha256','mensagen',false);
$hash2 = hash('sha256','mensagen2',false);
$hash3 = hash('sha256','mensagen3',false);
$hash4 = hash('sha256','mensagen4',false);

$arrayCookie = array(setcookie("COOKIE_hash0", $hash, time() + 3600),
setcookie("COOKIE_hash1", $hash2, time() + 3600),
setcookie("COOKIE_hash2", $hash3, time() + 7200),
setcookie("COOKIE_hash3", $hash4, time() + 7200));

foreach($arrayCookie as $key => $cookies){
    //echo "Hash $key: ".$_COOKIE["COOKIE_hash".$key]."<br>";
    array_push($arrayJason, $_COOKIE["COOKIE_hash".$key]);
}

$arquivoCookie = fopen("cookies.txt","w+");

$add = json_encode($arrayJason);

fwrite($arquivoCookie,$add."\n\r");

fclose($arquivoCookie);

var_dump($arrayJason);
