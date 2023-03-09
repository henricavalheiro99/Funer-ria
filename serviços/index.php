<?php
include ("Servicos.php");
include ("Servesp.php");


$servico1 = new Servicos("Sepultamento em jazigo", "Jazigo perpétuo", 5000);
$servico2 = new Servicos("Cremação", "Cremação individual", 3000);
$servico3 = new Servesp("Translado", "Translado nacional", 2000, "Acompanhamento personalizado");

$servicos = array($servico1, $servico2, $servico3);

foreach ($servicos as $servico) {
    echo $servico . '<br>';
}
