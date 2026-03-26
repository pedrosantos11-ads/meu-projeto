<?php
//Exercicio 2
echo "<br>";
$preco=$_POST["v1"];
$desconto=$_POST["v2"];

echo "Preco=".$preco." Desconto=".$desconto."<br>";

echo "<br>";

echo "Desconto=".($preco-$desconto);

?>