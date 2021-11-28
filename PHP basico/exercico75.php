<?php

class DespesaMes{
    private $mes; //mes da despesa
    private $valor; // valor da despesa

    function __construct(int $mes,float $valor)
    {
        $this->mes = $mes;
        $this->valor = $valor;
    }

    function getMes():int{
        return $this->mes;
    }

    function getValor():float{
        return $this->valor;
    }

}


class DespesaDia extends DespesaMes{
    private $dia;

    function __construct(int $dia, int $mes, float $valor)
    {
        $this->mes = $mes;
        $this->valor = $valor;
        $this->dia = $dia;
    }

    function getDia(){
        return $this->dia;
    }
}



class DespesaIndividuo extends DespesaDia{
    private $cpf;

    function __construct(string $cpf, int $dia, int $mes, float $valor)
    {
        $this->cpf = $cpf;
        $this->mes = $mes;
        $this->valor = $valor;
        $this->dia = $dia;
    }

    function getCpf(){
        return $this->cpf;
    }

    function totalizaMes(int $mes){
        if($this->mes == $mes){
            $mesT = new DespesaMes($mes,$this->valor);
        }
        return $mesT;
    }
}


$despesa1 = new DespesaIndividuo("487.398.383-23", 30,1,400);

var_dump($despesa1->totalizaMes(1));