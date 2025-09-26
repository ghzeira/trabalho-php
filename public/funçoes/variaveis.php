<?php
$nome = "Maria";

function testarVariaveis() {
    $idade = 20;
    
    echo "Dentro da função:<br>";
    echo "Idade (local): " . $idade . "<br>";
    
    global $nome;
    echo "Nome (global): " . $nome . "<br>";
}

testarVariaveis();

echo "<br>Fora da função:<br>";
echo "Nome (global): " . $nome . "<br>";
?>
