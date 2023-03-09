<?php

$marea = new Veiculos(
    "MDY-2948",
    "Fiat",
    "R$1000,00",
    2006
);

$opala = new Veiculos(
    "VJR-3742",
    "chevrolet",
    "R$150,00",
    1989
);

echo "marea turbo <br>";
echo "Placa: ".$marea->getPlaca()."<br>";
echo "Marca: ".$marea->getMarca()."<br>";
echo "Valor IPVA: ".$marea->getIpva()."<br>";
echo "Ano: ".$marea->getAno()."<br>";
echo "<hr>";
echo "Opala <br>";
echo "Placa: ".$opala->getPlaca()."<br>";
echo "Marca: ".$opala->getMarca()."<br>";
echo "Valor IPVA: ".$opala->getIpva()."<br>";
echo "Ano: ".$opala->getAno()."<br>";