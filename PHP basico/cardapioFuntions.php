<?php

function cardapio(array $pedido){
    $conte = 0;
    echo "<br>------------PEDIDO----------------<br>";
    if (sizeof($pedido)>6){
        echo "O pedido excede 6 itens<br>";

    }elseif(sizeof($pedido)<3){
        echo "Pedido com menos de 3 itens<br>";

    }else

    foreach ($pedido as $pe){
        $conte += 1;  
        echo "Item $conte: $pe <br>";
    }
    
}