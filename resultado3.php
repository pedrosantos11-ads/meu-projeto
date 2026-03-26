<?php
//Exercicio 3
echo "<br>";

$arroz=$_POST["v1"];
$preco=$_POST["v2"];

echo "Arroz=".$arroz." Preço=".$preco."<br>";

echo "<br>";

echo "Valor total=".($arroz*$preco);

?>