<?php

class Produtos {
    private $nome;
    private $quantidade;
    private $valor;
    private $altura;
    private $largura;

    public function __construct($nome, $quantidade, $valor, $altura, $largura){
        $this->nome = $nome;
        $this->quantidade = $quantidade;
        $this->valor = $valor;
        $this->altura = $altura;
        $this->largura = $largura;
    }

    public function getNome() {
        return $this->nome;
    
    }

    public function getQuantidade() {
        return $this->quantidade;
    }

    public function getValor() {
        return $this->valor;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function getLargura() {
        return $this->largura;
    }



}