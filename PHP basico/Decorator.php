<?php


abstract class Pao{
    public $recheio=array();

    function contabilizaRecheio(PaesRecheio $recheio){
       
    }

    function addRecheio(PaesRecheio $rechei){
        $this->recheio[] = $rechei;
    }

    function getNome(){
        return $this->nome;
    }

    function GetvalorTotal(){
        foreach($this->recheio as $r){
            $this->valorPao += $r->ValorRecheio();
        }
        return $this->valorPao;
        
    }


}

abstract class PaesRecheio extends Pao{
    protected $nome;

    abstract function ValorRecheio();



}



class Salame extends PaesRecheio{
    private $valor = 2;

    public function __construct()
    {
        $this->nome = "Salame";
    }

    public function ValorRecheio(){
        return $this->valor;
    }
}

class mussarela extends PaesRecheio{
    private $valor = 2.5;

    public function __construct()
    {
        $this->nome = "Mussarela";
    }

    public function ValorRecheio(){
        return $this->valor;
    }
}

class ovo extends PaesRecheio{


    public function __construct()
    {
        $this->nome = "Ovo";
    }

    public function ValorRecheio(){
        return 2.70;
    }
}

class Margarina extends PaesRecheio{
    private $valor = 0.5;

    public function __construct()
    {
        $this->nome = "Margarina";
    }

    public function ValorRecheio(){
        return $this->valor;
    }
}

class Geleia extends PaesRecheio{
    private $valor = 1;


    public function __construct()
    {
        $this->nome = "Geleia";
    }

    public function ValorRecheio(){
        return $this->valor;
    }
}

class PastaDeAmendoim extends PaesRecheio{
    private $valor = 1.20;


    public function __construct()
    {
        $this->nome = "Pasta de Amendoim";
    }

    public function ValorRecheio(){
        return $this->valor;
    }
}


class PaoSal extends Pao{
    public $valorPao = 1;

    function __construct(){
    }


}

class PaoDoce extends Pao{
    public $valorPao = 1.5;

    function __construct(){
        
    }

        

}

echo '------------------Algumas combinações de Pao e Recheios--------------------';

$salame1 = new salame();
$mussarela1 = new mussarela();
$ovo1 = new ovo();
$margarina1 = new Margarina();
$geleia1 = new Geleia();
$pastaDeAmendoim = new PastaDeAmendoim();

$paoSal1 = new PaoSal();

$paoSal1->addRecheio($salame1);
$paoSal1->addRecheio($mussarela1);

var_dump($paoSal1);
var_dump($paoSal1->GetvalorTotal());
 
echo '--------------------------------------';

$paoSal2 = new PaoSal();
$paoSal2->addRecheio($salame1);

var_dump($paoSal2);
var_dump($paoSal2->GetvalorTotal());

echo '--------------------------------------';

$paoDoce1 = new PaoDoce();
$paoDoce1->addRecheio($pastaDeAmendoim);
$paoDoce1->addRecheio($geleia1);

var_dump($paoDoce1);
var_dump($paoDoce1->GetvalorTotal());
