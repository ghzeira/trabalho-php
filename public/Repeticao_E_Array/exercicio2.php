<?php

$produtos = [
    "Produto 1" => 20.50,
    "Produto 2" => 15.30,
    "Produto 3" => 45.00,
    "Produto 4" => 10.00,
    "Produto 5" => 30.75
];

$soma_total = 0;

echo "Produtos e seus preços:<br>";
foreach ($produtos as $produto => $preco) {
    echo $produto . ": R$ " . number_format($preco, 2, ',', '.') . "<br>";

    $soma_total += $preco;
}

echo "<br>Valor total da soma dos preços: R$ " . number_format($soma_total, 2, ',', '.') . "\n";

?>