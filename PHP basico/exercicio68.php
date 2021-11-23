<?php

require_once 'exercicio66.php';

class Secretaria extends Pessoa{
    private $id;
    private $horaTrabalhada;
    private $horasExtras;

    public function __construct(int $id,string $horaTrabalhada, string $horasExtras,string $nome, string $CPF,string $endereco,string $nomePai,string $nomeMae,string $rg,string $serialDeIdentidade)
    {
        parent::__construct($nome, $CPF, $endereco, $nomePai, $nomeMae, $rg, $serialDeIdentidade);
        $this->id = $id;
        $this->funcao = $horaTrabalhada;
        $this->horarioEntrada = $horasExtras;
        parent::__construct($nome, $CPF, $endereco, $nomePai, $nomeMae, $rg, $serialDeIdentidade);
    } 

    public function sethoraTrabalhada(string $horaTrabalhada){
        $this->horaTrabalhada = $horaTrabalhada;
    }

    public function setHorasExtras(string $horasExtras){
        $this->horasExtras = $horasExtras; 
    }

    public function getId(){
        return $this->id;

    }

    public function getHoraTrabalhada(){
        return $this->horaTrabalhada;
    }

    public function gethorasExtras(){
        return $this->horasExtras; 
    }

    public function __toString()
    {
        $arrayAtributos = array();

        array_push($arrayAtributos, $this->id);
        array_push($arrayAtributos, $this->horaTrabalhada);
        array_push($arrayAtributos, $this->horasExtras);
        

        return json_encode($arrayAtributos);;
    }

}

$Secretaria = new Secretaria(3,'8h','2h','Jeovana','938.008.424-44','Rua x Bairro y','Ferdinando','Maria','839732','453');

var_dump($Secretaria->__toString());