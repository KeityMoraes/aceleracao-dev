<?php



function pares(array $valores){
    $conte = 0;
    $rvalores = array();
    foreach($valores as $n){
        if ($n%2==0){
            $rvalores[$conte]=$n;
            $conte += 1;
        }
    }
    return $rvalores;

}

$arrayTeste = array(1,2,3,4,5,6,7,8,9,10,11,12);

var_dump(pares($arrayTeste));