<?php
//Exercicio 4

echo "<br>";

$total_conta = floatval($_POST["total_conta"]);
$pessoas = $_POST ["pessoas"];

echo "Valor da conta = ".$total_conta." Quantidade de pessoas=".$pessoas."<br>";

echo "<br>";

echo "Valor por pessoa = ".($total_conta / $pessoas);


?>