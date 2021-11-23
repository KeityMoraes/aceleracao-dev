<?php

require_once 'exercicio66.php';

class Atendente extends Pessoa{
    private $id;
    private $funcao;
    private $horarioEntrada;
    private $horaroSaida;

    public function __construct(int $id,string $funcao, string $horarioEntrada,string $horaroSaida,string $nome, string $CPF,string $endereco,string $nomePai,string $nomeMae,string $rg,string $serialDeIdentidade)
    {
        $this->id = $id;
        $this->funcao = $funcao;
        $this->horarioEntrada = $horarioEntrada;
        $this->horaroSaida = $horaroSaida;
        parent::__construct($nome, $CPF, $endereco, $nomePai, $nomeMae, $rg, $serialDeIdentidade);
    } 

    public function setFuncao(string $funcao){
        $this->funcao = $funcao;
    }

    public function sethorarioEntrada(string $horarioEntrada){
        $this->horarioEntrada = $horarioEntrada; 
    }

    public function setHorarioSaida(string $horarioSaido){
        $this->horaroSaida = $horarioSaido;

    }

    public function getId(){
        return $this->id;

    }

    public function getFuncao(){
        return $this->funcao;
    }

    public function gethorarioEntrada(){
        return $this->horarioEntrada; 
    }

    public function getHorarioSaida(){
        return $this->horaroSaida;

    }

    public function __toString()
    {
        $arrayAtributos = array();

        array_push($arrayAtributos, $this->id);
        array_push($arrayAtributos, $this->funcao);
        array_push($arrayAtributos, $this->horarioEntrada);
        array_push($arrayAtributos, $this->horaroSaida);
        

        return json_encode($arrayAtributos);;
    }

}


$atendente = new Atendente(2,'Atendente','8:00','18:00','Lais','958.608.494-80','Rua x Bairro y','Ferdinando','Maria','839732','453');

var_dump($atendente->__toString());