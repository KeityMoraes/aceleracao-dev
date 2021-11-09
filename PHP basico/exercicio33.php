<?php

$arrayPrecos = array();
$i = 0;


while(sizeof($arrayPrecos)< 12){
    $aleatorio = rand(100,10000)/10;
    $arrayPrecos[$i]=$aleatorio;
    $i += 1;
}



function pagamento(array $valores, int $codigo){
    $valoraPagar = 0;
    echo "<br>";
    echo "PAGAMENTO COM CODIGO $codigo<br>";
    foreach($valores as $key => $valores){
        if ($codigo == 1){

            echo "<br>Forma de pagamento: A vista em dinheiro ou cheque (-10%)<br>";
            echo "Valor original: $valores <br>";
            $valorFinal = $valores - ($valores*10/100);
            echo "Valor final: $valorFinal<br>";
            echo"--------------------<br>";
            $valoraPagar += $valorFinal;

        }elseif($codigo == 2){

            echo "<br>Forma de pagamento: A vista no cartão de credito (-5%)<br>";
            echo "Valor original: $valores <br>";
            $valorFinal = $valores - ($valores*5/100);
            echo "Valor final: $valorFinal<br>";
            echo"--------------------<br>";
            $valoraPagar += $valorFinal;

        }elseif($codigo == 3){

            echo "<br>Em duas vezes (Preço normal sem juros)<br>";
            echo "Valor original: $valores <br>";
            $valorFinal = $valores;
            echo "Valor final: $valorFinal<br>";
            echo"--------------------<br>";
            $valoraPagar += $valorFinal;
        }elseif($codigo == 4){
            
            echo "<br>Em 3 vezes, preço normal mais juros de 10%<br>";
            echo "Valor original: $valores <br>";
            $valorFinal = $valores + ($valores*10/100);
            echo "Valor final: $valorFinal<br>";
            echo"--------------------<br>";
            $valoraPagar += $valorFinal;
        }else{
            echo "Codigo de pagamento invalido<br>";
            break;
        }
    }
    echo "TOTAL: $valoraPagar <br>";
}


//pagamento($arrayPrecos,1);
//pagamento($arrayPrecos,2);
//pagamento($arrayPrecos,3);
pagamento($arrayPrecos,4);




