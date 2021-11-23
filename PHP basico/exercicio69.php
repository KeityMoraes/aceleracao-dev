<?php

require_once 'exercicio66.php';

class Empregado extends Pessoa{
    private $id;
    private $funcao;
    private $horarioEntrada;
    private $horarioSaida;
    private $salario;
    private $horasExtras;

    public function __construct(string $nome,string $cpf,string $endereco,string $nomepai,
    string $nomemae,string $rg, string $serialdeidentificacao, string $salario, 
    string $horasExtras,int $id,string $funcao,string $horarioEntrada, string $horarioSaida)
    {
        parent::__construct($nome, $cpf, $endereco, $nomepai, $nomemae, $rg, $serialdeidentificacao);
        $this->id = $id;
        $this->funcao = $funcao;
        $this->horarioSaida = $horarioSaida;
        $this->horarioEntrada = $horarioEntrada;
        $this->salario = $salario;
        $this->horasExtras = $horasExtras;
    }

    public function setfuncao(string $funcao){
        $this->funcao = $funcao;
    }

    public function setHorarioEntrada(string $horarioEntrada){
        $this->horarioEntrada = $horarioEntrada; 
    }

    public function setHorarioSaida(string $horarioSaida){
        $this->horarioSaida = $horarioSaida;
    }

    public function setSalario(string $salario){
        $this->salario = $salario;
    }

    public function setHorasExtras(string $horasExtras){
        $this->setHorasExtras = $horasExtras;
    }

    public function getid(){
        return $this->id;
    }

    public function getFuncao(){
        return $this->funcao; 
    }

    public function getHorarioEntrada(){
        return $this->horarioEntrada;
    }

    public function getHorarioSaida(){
        return $this->horarioSaida; 
    }

    public function getSalario(){
        return $this->salario;
    }

    public function getHorasExtras(){
        return $this->horasExtras;
    }

    public function __toString()
    {
        $arrayAtributos = array();

        array_push($arrayAtributos, $this->id);
        array_push($arrayAtributos, $this->funcao);
        array_push($arrayAtributos, $this->horarioEntrada);
        array_push($arrayAtributos, $this->horarioSaida);
        array_push($arrayAtributos, $this->salario);
        array_push($arrayAtributos, $this->horasExtras);
        

        return json_encode($arrayAtributos);;
    }


}    


$Secretaria = new Empregado('Doarda','667.987.976-77','rua 59-a','fabio','Soraia','76544','890','7000','6h',4,'Analista','8:00','18:00');

var_dump($Secretaria->__toString());
