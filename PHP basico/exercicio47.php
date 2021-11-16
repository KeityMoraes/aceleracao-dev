<?php

$Arquivos = fopen("cartao.txt","w+");

$conteudo = file_get_contents("https://random-data-api.com/api/business_credit_card/random_card");

$emArray = json_decode($conteudo);
fwrite($Arquivos,$conteudo."\n\r");

//$arrayConteudo = implode(",",$emArray);

fclose($Arquivos);

foreach($emArray as $key => $valor){
    echo "$key: $valor<br>";
}
 
echo "<br>";
var_export($emArray);
echo "<br>";
echo "<br>";
var_export($conteudo);




