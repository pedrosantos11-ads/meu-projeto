<?php
$nota = floatval($_POST ["nota"] ?? 8.5);

if ($nota == 10) {
echo "Perfeito! <br>"; 

} elseif ($nota >= 8.5) {
    echo "Excelente! <br>";

} elseif ($nota >= 6) {
     echo "Bom! <br>";

} elseif ($nota >= 4) {
     echo "Precisa melhorar! <br>";

} elseif ($nota >= 0) {
    echo "Reprovado! <br>";

}

echo "Nota analisada:" . $nota;
?>

 