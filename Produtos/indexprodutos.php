<?php 


$p1 = new Produtos(
    "Flor",
    "50 flores",
    "50 flores = R$80,00",
    "Atura = 10cm",
    "Largura = 5cm",

    
);

$p2 = new Produtos(
    "caixão",
    "10 caixões",
    "10 caixões = R$15000,00",
    "Altura = 2m",
    "Largura = 1m",
);

$p3 = new Produtos(
    "vela",
    "25 velas",
    "25 velas = R$150,00",
    "Altura = 10cm",
    "Largura = 5cm",
);




 echo $p1->getNome() . "<br>";
 echo $p1->getQuantidade() . "<br>";
 echo $p1->getValor() . "<br>";
 echo $p1->getAltura() . "<br>";
 echo $p1->getLargura() . "<br>";
 echo "<hr>";

 echo $p2->getNome() . "<br>";
 echo $p2->getQuantidade() . "<br>";
 echo $p2->getValor() . "<br>";
 echo $p2->getAltura() . "<br>";
 echo $p2->getLargura() . "<br>";
 echo "<hr>";

 echo $p3->getNome() . "<br>";
 echo $p3->getQuantidade() . "<br>";
 echo $p3->getValor() . "<br>";
 echo $p3->getAltura() . "<br>";
 echo $p3->getLargura() . "<br>";
 echo "<hr>";



?>
