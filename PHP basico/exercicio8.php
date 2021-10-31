<?php

//$tipoteste = 4;
$tipoteste = readline("Digite um valor: ");

function letipo($valor){
    if ($valor > 0){
        echo "Valor positivo";
    }elseif($valor < 0){
        echo "Valor negativo";
    }else{
        echo "Valor igual a Zero";
    }
}


letipo($tipoteste);
