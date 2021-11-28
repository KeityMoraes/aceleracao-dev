<?php

interface Animal{
    public function getNomeEspecie(); //retorna nome da especie do animal
    public function getNomeAnimal(); //retorna nome do animal
}

interface Ferramentas{
    public function filtraEspecie($animal=[], string $especieFiltrar);
    public function classificarEspecies($animal =[]);

}


class Urso implements Animal{
    private $nomeEspecie;
    private $nomeAnimal;

    public function __construct(string $nomeEspecie, string $nomeAnimal)
    {
        $this->nomeEspecie = $nomeEspecie;
        $this->nomeAnimal = $nomeAnimal;
    }

    function getNomeEspecie(){
        return $this->nomeEspecie;
    }

    function getNomeAnimal(){
        return $this->nomeAnimal;
    }


}

class Macaco implements Animal{
    private $nomeEspecie;
    private $nomeAnimal;

    public function __construct(string $nomeEspecie, string $nomeAnimal)
    {
        $this->nomeEspecie = $nomeEspecie;
        $this->nomeAnimal = $nomeAnimal;
    }

    function getNomeEspecie(){
        return $this->nomeEspecie;
    }

    function getNomeAnimal(){
        return $this->nomeAnimal;
    }


}

class filtro implements Ferramentas{
    
    function filtraEspecie($animal = [], string $especieFiltrar)
    {
    }

    function classificarEspecies($animal = [])
    {
        
    }
}


function contabilizaAnimal($animais=[], filtro $ferramenta){
    $array = array();
    array_push($array,$animais);
    array_push($array,$ferramenta);

    var_dump($array);
}


$animal1 = new Urso("Urso Polar","Urso");
$animal2 = new Macaco("Orangutando","Macaco");
$ferramenta = new filtro();

$arrayAnimal = array($animal1,$animal2);




contabilizaAnimal($arrayAnimal,$ferramenta);



class Resultado{
    private $nomeEspecie;
    private $quantidade;
    
    public function __construct(string $nomeEspecie, int $quantidade)
    {
        $this->nomeEspecie = $nomeEspecie;
        $this->quantidade = $quantidade;
    }

    public function getNomeEspecie(){
        return $this->nomeEspecie;
    }

    public function getQuantidade(){

        return $this->quantidade;
    }
}