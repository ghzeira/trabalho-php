<?php

$curso = "PHP";
function mostrarMensagem() {
    global $curso;
    echo "O curso é: $curso";
}
mostrarMensagem();


?>