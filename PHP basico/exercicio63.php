<?php

class Porta{
    private $aberta;
    private $cor;
    private $altura;
    private $comprimento;
    private $largura;

    public function __construct(string $cor, float $altura, float $comprimento, float $largura){
        $this->cor = $cor;
        $this->altura=$altura;
        $this->comprimento=$comprimento;
        $this->largura=$largura;
        
    }
    
    public function get_cor(){
        return $this->cor;  
    }

    public function get_altura(){
        return $this->altura;
    }

    public function get_comprimento(){
        return $this->comprimento;
    }

    public function get_largura(){
        return $this->largura;
    }

    public function abre():void{
        $this->aberta = true;
    }

    public function fecha():void{
        $this->aberta = false;    
    }

    public function pintar(string $s):void{
        $this->cor = $s;
    }
    
    


}


class Casa{
    private $cor;
    private $porta1;
    private $porta2;
    private $porta3;
    private $aberta;
    

    public function pintar(string $cor){
        $this->cor = $cor;
    
    }

    Public function setPoerta1(Porta $porta1){
        $this->porta1 = $porta1;
    }

    Public function setPoerta2(Porta $porta2){
        $this->porta2 = $porta2;
    }

    Public function setPoerta3(Porta $porta3){
        $this->porta3 = $porta3;
    }


    public function totalDePortas(){
        $p = 0;
        if($this->porta1 != null ){
            $p += 1;

        }
        if($this->porta2 != null){
            $p += 1;
        }
        if($this->porta3 != null){
            $p +=1;

        }
        return $p;
    }

    public function PortasEstaoAbertas(){
        $p = 0;
        if($this->porta1->aberta == true){
            $p +=1;
        }
        if($this->porta2->aberta == true){
            $p +=1;
        }
        if($this->porta3->aberta == true){
            $p +=1;
        }
        return $p;
    }


}


class Edificio{
    private $cor;
    private $totalDePortas = 0;//revisar
    private $totalDeAndares;
    private $portas;



    public function pintar(string $cor):void{
        $this->cor = $cor;
    
    }

    public function adicionaPorta():void{
        $this->totalDePortas += 1;
    }

    public function totalDePortas(){
        return $this->totalDePortas;
    } 

    public function adicionaAndar():void{
        $this->totalDeAndares += 1;
    }

    public function totalDeAndares(){
        return $this->totalDeAndares;
    } 




}


class Imovel{
    
}

