<?php

function nome($nome){
    if($nome == null){
        throw new Exception("Nome nao pode ser nulo",1);
    }
    echo $nome;
}


try{
    nome("");
}catch(Exception $erro){
    $erromsg = $erro->getMessage();
    $json = json_encode($erromsg);
}finally{
    var_dump($json);
}