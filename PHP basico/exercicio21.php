<?php

$nula = null;
$int = 132;
$string = "Mariane";
$flo = 2.5;
$array = array(1,2,3);


function verifica($valor){
    if (is_null($valor)){
        echo "Essa variavel é nula";
    }elseif(is_array($valor)){
        var_export($valor);
    }
}

verifica($nula);
echo "<br>";
verifica($int);
echo "<br>";
verifica($string);
echo "<br>";
verifica($flo);
echo "<br>";
verifica($array);