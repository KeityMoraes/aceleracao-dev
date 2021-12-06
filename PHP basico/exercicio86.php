<?php

//exercicio 85 da lista 10

interface Arma{
    public function usarArma();
}

abstract class Personagem{
    private $arma;

    function Lutar():void{
        if ($this->arma != null){
            echo "<br>Em batalha<br>";
        }else{
            echo "<br>Sem arma para batalhar<br>";
        }
    }

    public function getArma(){
        return $this->arma;
    }

    public function setArma(Arma $arma){
        $this->arma = $arma;
    }

    public function getHierarquia(){
        return $this->hierarquia;
    }
}

class rei extends Personagem{
    private $hierarquia; 
    
    function __construct()
    {
        $this->hierarquia = 'Rei';

    }
    
}

class Rainha extends Personagem{
    private $hierarquia; 
    
    function __construct()
    {
        $this->hierarquia = 'Rainha';

    }
    
}

class Guerreiro extends Personagem{
    private $hierarquia; 
    
    function __construct()
    {
        $this->hierarquia = 'Gerreiro';

    }
    
}

class Duende extends Personagem{
    private $hierarquia; 
    
    function __construct()
    {
        $this->hierarquia = 'Duende';

    }
    
}


class Machado implements Arma{
    private $tipoArma;

    public function __construct()
    {
        $this->tipoArma = 'Machado';
    }

    public function usarArma(){
        echo "Usando $this->tipoArma";
    }

}

class Arcoeflexa implements Arma{
    private $tipoArma;

    public function __construct()
    {
        $this->tipoArma = 'Arco e flexa';
    }

    public function usarArma(){
        echo "Usando $this->tipoArma";
    }

}

class Espada implements Arma{
    private $tipoArma;

    public function __construct()
    {
        $this->tipoArma = 'Espada';
    }

    public function usarArma(){
        echo "Usando $this->tipoArma";
    }

}

class Faca implements Arma{
    private $tipoArma;

    public function __construct()
    {
        $this->tipoArma = 'Faca';
    }

    public function usarArma(){
        echo "Usando $this->tipoArma";
    }

}


$arma1 = new Machado();
$rei = new rei();
$rei->setArma($arma1);
$rei->Lutar();

