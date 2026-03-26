<?php
$saldo = floatval($_POST["saldo_inicial"]);
$deposito = floatval($_POST["deposito"]);
$saldo += $deposito;
echo "Saldo atualizado: $saldo";
?>