<?php
$numero = intval($_POST['numero']);
$divisor = intval($_POST['divisor']);
$original = $numero;
$numero %= $divisor;

echo "Resultado de $original %= $divisor é: $numero";
?>