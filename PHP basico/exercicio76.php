<?php


require_once 'exercicio73.php'; 
require_once 'exercico75.php';


class CorrentistaDespesa extends Correntista{
     private $despesasPrevista;
     
     public function __construct(string $cpf, float $valor,DespesaIndividuo $despesasPrevista)
     {
         $this->despesasPrevista = $despesasPrevista;
         $this->cpfCliente = $cpf;
         $this->saldo = $valor;
     }

     public function getDespesasPrevistas(){
         return $this->despesasPrevista;
     }
}



$despesa1 = new DespesaIndividuo("763.348.283-92", 30,1,2500);
$Cd1 = new CorrentistaDespesa("763.348.283-92",2500,$despesa1);


//var_dump($despesa1);
var_dump($Cd1);



function CD($CorrentistasDespesas=[]){
    foreach($CorrentistasDespesas as $c){
        //if($CorrentistasDespesas)
    }
}