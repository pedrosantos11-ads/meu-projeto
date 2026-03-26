<?php
$nota = 10;
$nota = $_POST["nota"];

if($nota < 0 || $nota > 10){
    echo "Nota inválida";
}
    elseif ($nota == 10) {
        echo "Perfeito!";
    }
    elseif ($nota >= 8.5) {
        echo "Excelente!";
    }
    elseif ($nota >= 6) {
        echo "Bom!";
    }
    elseif ($nota >= 4) {
        echo "Pode melhorar!";
    }
    else {
        echo "Reprovado!";
    }
?>