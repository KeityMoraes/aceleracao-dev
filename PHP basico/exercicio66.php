<?php

class Pessoa{
    private $nome;
    private $CPF;
    private $endereco;
    private $nomePai;
    private $nomeMae;
    private $rg;
    private $serialDeIdentidade;

    public function __construct(string $nome, string $CPF,string $endereco,string $nomePai,string $nomeMae,string $rg,string $serialDeIdentidade)
    {
        $this->nome = $nome;
        $this->CPF = $CPF;
        $this->endereco = $endereco;
        $this->nomePai = $nomePai;
        $this->nomeMae = $nomeMae;
        $this->rg = $rg;
        $this->serialDeIdentidade= $serialDeIdentidade; 
        
    }

    public function setEndereco(string $endereco){
        $this->endereco = $endereco;

    }

    public function setNomePai(string $nomePai){
        $this->nomePai = $nomePai;
    }

    public function setNomeMae(string $nomeMae){
        $this->nomeMae = $nomeMae;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getCPF(){
        return $this->CPF;
    }

    public function getEndereco(){
        return $this->endereco;
    }

    public function getNomePai(){
        return $this->nomePai;
    }

    public function getNomeMae(){
        return $this->nomeMae;
    }

    public function getRg(){
        return $this->rg;
    }

    public function getSerialDeIdentiade(){
        return $this->serialDeIdentidade;
    }

    public function __toString()
    {
        $arrayAtributos = array();

        array_push($arrayAtributos, $this->nome);
        array_push($arrayAtributos, $this->CPF);
        array_push($arrayAtributos, $this->endereco);
        array_push($arrayAtributos, $this->nomePai);
        array_push($arrayAtributos, $this->nomeMae);
        array_push($arrayAtributos, $this->rg);
        array_push($arrayAtributos, $this->serialDeIdentidade);

        $jsonAtributos = json_encode($arrayAtributos);

        return $jsonAtributos;
    }
}

$pessoa1 = new Pessoa('Keity','022.795.731.30','rua 23 setor norte','Leo','Virginia','234565','389');
$pessoa2 = new Pessoa('Liliam','090.790.711.30','rua 11 setor sul','Jose','Maria','486272','185');

var_dump($pessoa1->__toString());
var_dump($pessoa2->__toString());


?>