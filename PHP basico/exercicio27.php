<?php

$texto = "O PHP (um acrônimo recursivo para PHP: Hypertext Preprocessor) é uma
linguagem de script open source de uso geral, muito utilizada, e especialmente
adequada para o desenvolvimento web e que pode ser embutida dentro do HTML.";

$minusculo = strtolower($texto);
$maiusculo = strtoupper($texto);
$primaiusculo = ucfirst($texto);
$palavramaiusculo = ucwords($texto);


echo"$minusculo <br>";
echo"<br>";
echo "$maiusculo <br>";
echo"<br>";
echo "$primaiusculo<br>";
echo"<br>";
echo "$palavramaiusculo<br>";
