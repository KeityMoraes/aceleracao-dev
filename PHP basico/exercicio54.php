<?php

$arrayNumeros = array(4,5,3,2,8,2,1,10,13,4,6,9,13,8,1);



function verificaPar($n){
    if($n%2 == 0){
        return true;
    }else{
        throw new Exception("Numero $n não valido para essa operação<br>", 535);

    }
} 



foreach($arrayNumeros as $numeros){
    try{
        verificaPar($numeros);
    }catch(Exception $error){
        echo $error->getMessage(). " COD ERROR: ". $error->getCode()."<br>";
    }

}


//finally{
//    echo '<br> O try catch foi todo executado';
//}