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
echo $marea->getPlaca()."<br>";
echo $marea->getMarca()."<br>";
echo $marea->getIpva()."<br>";
echo $marea->getAno()."<br>";
echo "<hr>";
echo "Opala <br>";
echo $opala->getPlaca()."<br>";
echo $opala->getMarca()."<br>";
echo $opala->getIpva()."<br>";
echo $opala->getAno()."<br>";