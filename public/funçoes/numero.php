<?php
function ParouImpar ($numero) {
    if($numero % 2==0 ){
        return "o $numero é par.";

    }else
        return "o $numero é impar.";

}

        echo ParouImpar(7);
        echo "<br>";
        echo ParouImpar(10);

?>