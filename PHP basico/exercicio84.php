<?php

//Exercicio 83 da lista 10 (Acoplamento)


interface funcionario{
    function funcaoFuncionario();
}



class Designer implements funcionario{

    function funcaoFuncionario(){
        return "Arquitetura de design";
    }
}


class Programmer implements funcionario{

    function funcaoFuncionario(){
        return "Escreve codigo";
    }
}

class Tester implements funcionario{

    function funcaoFuncionario(){
        return "Teste de software";
    }
}


class Company{

    function buscaFuncao(funcionario $funcionario){
        echo "O funcionário faz: ".$funcionario->funcaoFuncionario();
    }

}


$designer = new Designer;

$company1 = new Company;
$company1->buscaFuncao($designer);