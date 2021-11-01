<?php

$distritos = file_get_contents("https://servicodados.ibge.gov.br/api/v1/localidades/distritos");

$obj = New stdClass;

$obj -> distritos = $distritos;

var_export($obj);