<?php

$alunos = [
    "João" => 8.5,
    "Maria" => 6.2,
    "Pedro" => 7.8,
    
];

$somaNotas = 0;
$totalAlunos = count($alunos);

foreach ($alunos as $nome => $nota) {

    $somaNotas += $nota;

    
    if ($nota >= 7) {
      
        echo "<p> Aluno $nome tirou nota $nota - Situação: APROVADO</p>";
    } else {

        echo "<p> Aluno $nome tirou nota $nota - Situação: REPROVADO</p>";
    }
}

$media = $somaNotas / $totalAlunos;

echo "<p>A média da turma é: $media</p>";
?>