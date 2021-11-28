<?php

class ItemOrcamento{
    private $historico;
    private $valor;

    function __construct(string $historico, float $valor)
    {
        $this->historico = $historico;
        $this->valor = $valor;
    }

    function getHistorico(){
        return $this->historico;
    }

    function getValor(){
        return $this->valor;
    }

}


class ItemOrcamentoComplexo extends ItemOrcamento{
    private $subItens=[];

    function __construct(string $historico, float $valor,$subItens=[])
    {
        $this->historico = $historico;
        $this->valor = $valor;
        $this->subItens = $subItens;
    }

    function encontaItem(){
        foreach($this->subItens as $valores){
            if($valores == $this->historico){
                return $valores;
            }else{
                return null;
            }
        }
    }

}