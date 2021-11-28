<?php

require_once 'exercicio73.php';

$correntista1 = new Correntista('985.984.321-64', 3400);
$correntista2 = new Correntista('763.453.567-90', 8760);
$correntista3 = new Correntista('129.953.300-20', 1350);

$correntista1->setSaldo(567);

$correntista1->sacar(250);

$arrayCorrentistas = [];

array_push($arrayCorrentistas,$correntista1,$correntista2,$correntista3);

var_dump($arrayCorrentistas);

function encontrarCorrentista($todosCorrentistas=[], string $cpfProcurado){
    foreach($todosCorrentistas as $c){
        if($c->getCPFCliente() == $cpfProcurado){
            return $c;
        }
    }
}


echo"---------------------------";
echo"Função Procura cliente pelo cpf 129.953.300-20<br>";

var_dump(encontrarCorrentista($arrayCorrentistas,"129.953.300-20"));