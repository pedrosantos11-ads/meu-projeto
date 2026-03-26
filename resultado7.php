<?php
$estoque = intval($_POST["estoque"]);
$quantidade = intval($_POST["quantidade_vendida"]);
$estoque -= $quantidade;
echo "Estoque atualizado: $estoque";
?>