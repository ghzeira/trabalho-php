<?php
  function calcularMedia($n1, $n2, $n3) {
    return ($n1 + $n2 + $n3) / 3;
    }
    function verificarsituacao($media){
            if($media >= 7){
            return "aprovado";
            } else {
                return "reprovado";
            }

    }
    $mediaAluno = calcularMedia(7, 8, 9);
    echo "media : $mediaAluno<br>";
    echo "situacao: " . verificarsituacao ($mediaAluno);



?>