<?php

require 'autoload.php';


$dvd1 = new DVD(1,35,"jorge&mateus",2010);
$dvd2 = new DVD(2,40,"fernando&sorocaba",2012);
$dvd3 = new DVD(3,31,"Luisasonsa",2020);
$dvd4 = new DVD(4,50,"LuanSantana",2010);

$leite1 = new leite("leitBom",1,"22-01-03",1,4.5);
$leite2 = new leite("Piracanjuba",1,"21-01-11",2,4.5);
$leite3 = new leite("Italac",1,"20-01-12",3,3.5);
$leite4 = new leite("Parmalat",1,"21-05-02",4,4.5);
$leite5 = new leite("Marajoara",1,"21-05-11",5,4.5);
$leite6 = new leite("Ninho",1,"21-05-03",6,2.5);

$arrayDVD = array($dvd1,$dvd2,$dvd3,$dvd4);
$arraLeite = array($leite1,$leite2,$leite3,$leite4,$leite5,$leite6);


//leites vencidos retornam true
foreach($arraLeite as $leite){
    var_dump($leite->estaVencido());
}


//filtra por ano
foreach($arrayDVD as $dvd){
    var_dump($dvd->filtraDvD(2010));
}



