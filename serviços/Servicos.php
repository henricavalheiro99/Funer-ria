<?php
    class Servicos {
        private $descricao;
        private $nome;
        private $valor;
     
        public function __construct($descricao, $nome, $valor) {
           $this->setDescricao($descricao);
           $this->setNome($nome);
           $this->setValor($valor);
        }
     
        public function getDescricao() {
           return $this->descricao;
        }
     
        public function setDescricao($descricao) {
           $this->descricao = $descricao;
        }
     
        public function getNome() {
           return $this->nome;
        }
     
        public function setNome($nome) {
           $this->nome = $nome;
        }
     
        public function getValor() {
           return $this->valor;
        }
     
        public function setValor($valor) {
           $this->valor = $valor;
        }
     
        public function __toString() {
           return $this->getNome() . " - " . $this->getDescricao() . " - R$ " . $this->getValor();
        }
     }
     
?>