<?php
//Exercicio 1
$valor1=$_POST["v1"];
$valor2=$_POST["v2"];

echo "Valor 1=".$valor1." Valor 2=".$valor2."<br>";

echo "<br>";

echo "Soma =".($valor1+$valor2)."<br>";

?>

 

<?php
//Exercicio 2
echo "<br>";
$preco=$_POST["v1"];
$desconto=$_POST["v2"];

echo "Preco=".$preco." Desconto=".$desconto."<br>";

echo "<br>";

echo "Desconto=".($preco-$desconto);

?>


<?php
//Exercicio 3
echo "<br>";

$arroz=$_POST["v1"];
$preco=$_POST["v2"];

echo "Arroz=".$arroz." Preço=".$preco."<br>";

echo "<br>";

echo "Valor total=".($arroz*$preco);

?>

<?php
//Exercicio 4

echo "<br>";

$total_conta = floatval($_POST["total_conta"]);
$pessoas = $_POST ["pessoas"];

echo "Valor da conta = ".$total_conta." Quantidade de pessoas=".$pessoas."<br>";

echo "<br>";

echo "Valor por pessoa = ".($total_conta / $pessoas);


?>

<?php
//Exercicio 5
echo "<br>";

$numero = intval($_POST["numero"]);
$resto = $numero % 2;

echo "Numero = ".$numero."<br>";

echo "Resto da divisão por 2 = ".$resto;

?>


