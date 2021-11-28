<?php


class Livro{

	private $titulo;
	private $Page = [];

    public function __construct(string $titulo)
    {
        $this->titulo = $titulo;
    }

    function addPage(Page $page){
        $this->Page[] = $page;
    }



}
 



class Page{

    private $Titulo;
    private $texto;
    private $livro;
    private $destaques = [];
    private $date;

    public function __construct(string $titulo,string $texto,Livro $livro)
    {
        $this->Titulo = $titulo;
        $this->texto = $texto;
        $this->livro = $livro;
        $this->livro->addPage($this);
        $this->date = new \DateTime();
    }

    function addDestaque(string $destaque){
        $this->destaques[] = $destaque;
    }

    function __clone()
    {
        $this->Titulo = "Clone de: ".$this->Titulo;
        $this->texto = $this->texto;
        $this->livro->addPage($this);
        $this->destaques = [];
        $this->date = new \DateTime();

    }

}


$livro = new Livro("Aceleracao PHP");
$pagina = new Page("Capitulo 1", "deisgn patterns, Padrao GOF",$livro);
$pagina->addDestaque("dwjdklsdslsfkls","fjfejfek");

$pagina1 = clone $pagina;

print_r($pagina);

echo"<br>-------------------------------------------------<br>";
print_r($pagina1);


