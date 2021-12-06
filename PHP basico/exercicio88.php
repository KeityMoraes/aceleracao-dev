<?php

//exercicio 87 da lista 10

interface dataBase{
    public function insert();
    public function update();
    public function delete();
}

class BudgetReport{
    private dataBase $database;

    public function open(){
        //implementação
    }

    public function save(){
        //implementação
    }
}

class MySQLdatabase implements dataBase{

    public function insert(){
        //implementação
    }
    public function update(){
        //implementação
    }
    public function delete(){
        //implementação
    }
}


?>