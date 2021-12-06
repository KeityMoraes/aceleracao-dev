<?php

class DVD extends Produto{
    private $titulo;
    private $ano;

    public function __construct(int $codigo, float $preco, string $titulo, int $ano)
    {
        
        $this->codigo = $codigo;
        $this->preco = $preco;
        $this->titulo = $titulo;
        $this->ano = $ano;

    }

    function filtraDvD(int $ano){
        if($this->ano == $ano){
            return $this;
        }else{
            return false;
        }

    }
    
}