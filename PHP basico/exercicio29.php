<?php

$mesorregioes = file_get_contents("https://servicodados.ibge.gov.br/api/v1/localidades/mesorregioes/1101");

$array = array($mesorregioes);

var_export($array);