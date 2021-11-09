<?php

$nome = "Antonio";
$cpf = "023.456.231-70";
$nDependentes = 1;
$rendaMensal = 3500;

function impostodeRenta(int $dependentes,float $renda){
    $valorF = 0;
    $salarioMinimo = 1000;
    if ($dependentes != 0){
        $porcento = 5*$dependentes;
        $renda = $renda - ($renda*$porcento/100);
    }
        if ($renda < 2*$salarioMinimo){
            $valorF = $renda;
        }elseif($renda >2*$salarioMinimo and $renda < 3*$salarioMinimo){
            $valorF = $renda*5/100;
        }elseif($renda > 3*$salarioMinimo and $renda < 5*$salarioMinimo){
            $valorF = $renda*10/100;
        }
        
    return $valorF;

}

echo "Nome: $nome<br>";
echo "CPF: $cpf<br>";
echo "Numero de dependentes: $nDependentes<br>";
echo "Renda mensal: $rendaMensal<br>"; 
echo "Imposto de renda a pagar: ".impostodeRenta($nDependentes,$rendaMensal);