<?php
function calcularMedia($nota1, $nota2, $nota3) {
    $media = ($nota1 + $nota2 + $nota3) / 3;
    return $media;
}

$nota1 = 7.5;
$nota2 = 8.0;
$nota3 = 9.0;

$mediaFinal = calcularMedia($nota1, $nota2, $nota3);

echo "A média do aluno é: " . number_format($mediaFinal, 2);
?>
