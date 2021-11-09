<?php
require_once "cardapioFuntions.php";

$arrayPedido = array("Salgado1","Acompanhamento1","refrigerante1");
$arrayPedido1 = array("Salgado1","Salgado1","Refrigerente1","Refrigerante2");
$arrayPedido2 = array("Salgado");
$arrayPedido3 = array("Salgado1","Salgado1","Refrigerente1","Refrigerante2","Acompanhamento1",
"Acompanhamento2","Acompanhamento4");



cardapio($arrayPedido);
cardapio($arrayPedido1);
cardapio($arrayPedido2);
cardapio($arrayPedido3);
