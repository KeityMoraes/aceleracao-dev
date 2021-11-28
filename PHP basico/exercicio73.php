<?php

interface MovimentoConta{
    public function getCPFCorrentista():string;
    public function getValorMovimento():float;

}



interface OperacoesBancos{
    public function encontrarCorrentista($todosCorrentistas=[], string $cpfProcurado):Correntista;

}


class Correntista implements MovimentoConta{
    private $cpfCliente;
    private $saldo;
    private $valorMovimento;

    public function __construct(string $cpfCliente, float $saldo)
    {
        $this->cpfCliente = $cpfCliente;
        $this->saldo = $saldo;
        $this->valorMovimento = $this->saldo;
    }

    public function getCPFCliente(){
        return $this->cpfCliente;
    }

    public function getSaldo(){
        return $this->saldo;
    }

    public function setSaldo(float $saldo){
        $this->saldo += $saldo;
        $this->valorMovimento += $this->saldo;
    }

    public function sacar($valoraSacar){
        if($this->saldo>=$valoraSacar){
            $this->saldo -= $valoraSacar;
        }else{
            echo"Saldo insuficiente";
        }
        
    }


    public function getCPFCorrentista():string{
        return $this->cpfCliente;
    }
    public function getValorMovimento():float{
        return $this->valorMovimento;
    }


}
