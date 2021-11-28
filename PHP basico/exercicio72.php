<?php

use Animal as GlobalAnimal;

interface Animal{
    public function getNomeEspecie(); //retorna nome da especie do animal
    public function getNomeAnimal(); //retorna nome do animal
}


interface AnimalOrcamento extends Animal{
    public function itemOrcamentoComplexo(); //classe

    public function orcamentoGastosAnimais();
    
}

 


// não entendi