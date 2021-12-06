<?php

//exercicio 86 da lista 10


//não atende os requisitos por aceitar apenas uma forma de compactação,
//a solução seria a classe file receber um objeto do tipo compactação, sendo possivel adicionar outros formatos.

abstract class Compactar{
    private $file;

    public function __construct(File $file)
    {
        $this->file = $file;
    }

}

class Zip extends Compactar{

}

class Rar extends Compactar{

}

class Arj extends Compactar{

}


class File{
    private $size;

    public function compactacao(Compactar $tipoDeCompactacao){
        //algoritmo de compressão
    }
}


class image extends File{
    private $width;
    private $height;

    public function __construct(int $width, int $height)
    {
        $this->width = $width;
        $this->height = $height;
    }
}

class Audio extends File{
    private $codec;
    private $duration;

    public function __construct(string $codec, string $duration)
    {
        $this->codec = $codec;
        $this->duration = $duration;
    }
}

class Text extends File{
    private $fontSize;

    public function __construct(int $fontSize)
    {
        $this->fontSize = $fontSize;
    }
}

