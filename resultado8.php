<?php
$valor = floatval($_POST["valor"]);
$dobro = $valor;
$dobro *= 2;
$metade = $dobro;
$metade /= 2;

echo "Dobro: $dobro | Metade do resultado: $metade";
?>