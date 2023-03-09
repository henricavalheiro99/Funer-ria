<?php


class Veiculos{

    private $placa;
    private $marca;
    private $ipva;
    private $ano;

    public  function __construct($placa, $marca, $ipva, $ano){
        $this->placa = $placa;
        $this->marca = $marca;
        $this->ipva = $ipva;
        $this->ano = $ano;
    }

    public function getPlaca(){
        return $this->placa;
    }

    public function getMarca(){
        return $this->marca;
    }

    public function getIpva(){
        return $this->ipva;
    }

    public function getAno(){
        return $this->ano;
    }

    // public function listar() {
    //     echo "$";
    // }

}