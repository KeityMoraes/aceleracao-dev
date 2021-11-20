<?php


error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);

function divisao(int $n1, int $n2){
    if($n2 == 0){
        throw new Exception("não é
        possivel fazer divisão por 0",523);
    }else{
    $div = $n1/$n2;
    echo "A duvusao de $n1 por $n2 é: $div";
    return $div;
}

}


try{
    divisao(8,0);
}catch(Exception $erro){
    echo $erro->getMessage()."<br>";
    echo "Codigo de erro: ".$erro->getCode();
}



