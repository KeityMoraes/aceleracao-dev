<?php

class leite extends Produto implements Perecivel{
    private $marca;
    private $volume;
    private $dataValidade;

    public function __construct(string $marca,$volume,string $dataValidade, int $codigo, float $preco)
    {
        
        $this->marca = $marca;
        $this->volume = $volume;
        $this->dataValidade = $dataValidade;
        $this->codigo = $codigo;
        $this->preco = $preco;

    }


    public function estaVencido(){
        $dataAtual = date("d/m/y");
        if(strtotime($this->dataValidade) < strtotime($dataAtual)){
            return true;
        }else{
            return false;
        }
    }

}