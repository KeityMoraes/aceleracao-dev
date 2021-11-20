<?php



echo error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);

$idade = $_GET['idade'];
echo $idade;

/*function manipula_erros($code, $message, $file, $line){
    echo json_encode(array(
        "mensagem_de_erro" => $message,
        "linha_do_erro" => $line,
        "arquivo" => $file,
        "code" => $code
    ));
}*/

//set_error_handler("manipula_erros");

?>
