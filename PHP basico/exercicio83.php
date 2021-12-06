<?php

//Questão 82 da lista 10 (SRP)

class Order{
    private $order;

    public function __construct($order)
    {
        $this->order = $order;
    }

    public function printOrder(){
        echo $this->order;
    }

    public function showOrder(){

    }


}

class calculaTotal{
    private $orderValores=[];

    public function calculaTotalValores(Order $orderValores){
        //filtra pedido e add valores a $orderValores
    }

    public function calculaTotalSum(){

    }
}


class Itens{
    private $itensPedidos=[];

    function itensPedido(Order $pedido){
        //filtra pedido e add o itens em $itensPedidos
    }

    public function getItens(){

    }

}

class alteraItens extends Itens{

    public function addItem(){

    }

    public function deleteItem(){

    }
}


class loadOrder extends Order{
     
    public function load(){

    }
}

class saveOrder extends Order{
     
    public function save(){

    }
}

class updateOrder extends Order{
     
    public function update(){

    }
}

class deleteOrder extends Order{
     
    public function delete(){

    }
}
