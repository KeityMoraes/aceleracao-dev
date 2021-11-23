<?php

class Plano{
    private $x;
    private $y;
    private $x0;
    private $y0;

    public function __construct(float $x, float $y, float $x0, float $y0){
        $this->x = $x;
        $this->y = $y;
        $this->x0 = $x0;
        $this->y0 = $y0;

    }


    public function get_ponto(){
        $arrayPonto = array();
        array_push($arrayPonto, $this->x);
        array_push($arrayPonto, $this->y);
        return $arrayPonto;
    } 

    public function get_ponto0(){
        $arrayPonto = array();
        array_push($arrayPonto, $this->x0);
        array_push($arrayPonto, $this->y0);
        return $arrayPonto;
    }


    public function distancia(){
        $d1 = ($this->x0 - $this->x)**2 + ($this ->y0 - $this->y)**2;
        $d2 = sqrt($d1);

        return $d2;

    }
}

$c = new plano(-3,-11,2,1);

echo $c->distancia();