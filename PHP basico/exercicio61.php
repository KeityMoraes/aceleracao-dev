<?php

class Nota{
    private $id_item;
    private $nome;
    private $descricao_item;
    private $quantidade_item;
    private $preco_venda;
    private $desconto;

    public function __construct(int $id_item, string $nome, int $quantidade_item,float $desconto){

        $this->id_item = $id_item;
        $this->nome = $nome;
        if ($quantidade_item == null){
            $this->quantidade_item = 0;
        }
        //$this.$pre_venda = $preco_venda;
        $this->$desconto = $desconto;

    }

    public function setpreco_venda(float $preco){
        $this->pre_venda = $preco;
    
    }

    public function setDescricao(string $descricao){
        $this->descricao_item = $descricao;
    } 

    public function get_idItem(){
        return $this-> id_item;

    }

    public function get_nome(){
        return $this-> nome;

    }

    public function get_quantidade(){
        return $this-> quantidade_item;
    }

    public function get_desconto(){
        return $this-> desconto;
    }

    public function calculaFatura(){
        $total = $this->preco_venda*$this->quantidade_item;
        return $total;
    }
}