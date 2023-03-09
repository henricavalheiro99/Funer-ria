<?php
class Servesp extends Servicos
{
    private $beneficios;

    public function __construct($nome, $descricao, $valor, $beneficios)
    {
        parent::__construct($nome, $descricao, $valor);
        $this->beneficios = $beneficios;
    }

    public function getBeneficios()
    {
        return $this->beneficios;
    }

    public function setBeneficios($beneficios)
    {
        $this->beneficios = $beneficios;
    }

    public function __toString()
    {
        $info = parent::__toString();
        $info .= ' - Benefícios: ' . $this->beneficios;
        return $info;
    }
}