<?php
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$operador = $_POST["operador"];

switch ($operador) {
    case '+':
        $resultado = $num1 + $num2;
        echo "$num1 + $num2 = $resultado";
        break;
    case '-':
        $resultado = $num1 - $num2;
        echo "$num1 - $num2 = $resultado";
        break;
    case '*':
        $resultado = $num1 * $num2;
        echo "$num1 * $num2 = $resultado";
        break;
    case '/':
        if ($num2 == 0) {
            echo "Erro: Divisão por zero!";
        } else {
            $resultado = $num1 / $num2;
            echo "$num1 / $num2 = " . number_format($resultado, 2);
        }
        break;
    case '%':
        if ($num2 == 0) {
            echo "Erro: Módulo por zero!";
        } else {
            $resultado = $num1 % $num2;
            echo "$num1 % $num2 = $resultado";
        }
        break;
    default:
        echo "Operador inválido! Use +, -, *, / ou %";
}
?>
