<?php
function ehbissexto($ano) {
    if ($ano % 400 == 0) {
        return true;
    }
    elseif ($ano % 100 == 0) {
        return false;
    }
    elseif ($ano % 4 == 0) {
        return true;
    }
    else {
        return false;
    }
}
$ano = $_POST["ano"];
    if (ehbissexto($ano)) {
        echo "$ano é bissexto!<br>";
    }
    else {
        echo "$ano não é bissexto!<br>";
    }
    $proximo = $ano + 1;
        while (!ehbissexto($proximo)) {
          $proximo++;
        }
    echo "Próximo ano bissexto: $proximo";
    ?>

