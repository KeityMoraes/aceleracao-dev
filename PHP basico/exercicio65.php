<?php

class Gerente{
    public $id;
    public $nome;
    public $alocacao;
    public $salario;
    public $quantidadeDeSubordinados;

    public function __construct()
    {
        $this->id = null;
        $this->nome = null;
        $this->alocacao = null;
        $this->salario = null;
        $this->quantidadeDeSubordinados = null;
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function setNome(string $nome){
        $this->nome = $nome;
    }

    public function setAlocacao(string $alocacao){
        $this->alocacao = $alocacao;
    }

    public function setSalario(float $salario){
        $this->salario = $salario;
    }

    public function setQuantidadeDeSubordinados(int $quantidade){
        $this->quantidadeDeSubordinados = $quantidade;
    }

    public function getId(int $id){
        return $this->id;
    }

    public function getNome(string $nome){
        return $this->nome;
    }

    public function getAlocacao(string $alocacao){
        return $this->alocacao;
    }

    public function getSalario(float $salario){
        return $this->salario;
    }
    public function getQuantidadeDeSubordinados(int $quantidade){
        return $this->quantidadeDeSubordinados;
    }

    public function __destruct()
    {
        
    }

    public function __toString()
    {
        $arrayAtributos = array();

        array_push($arrayAtributos, $this->id);
        array_push($arrayAtributos, $this->nome);
        array_push($arrayAtributos, $this->alocacao);
        array_push($arrayAtributos, $this->salario);
        array_push($arrayAtributos, $this->quantidadeDeSubordinados);

        $jsonAtributos = json_encode($arrayAtributos);

        return $jsonAtributos;
    }

}



$g = new Gerente();
$g->setId(1);
$g->setNome('Jose');
$g->setAlocacao('Local');
$g->setSalario(4.000);
$g->setQuantidadeDeSubordinados(5);

print_r($g->__toString());