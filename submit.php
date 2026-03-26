<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $age = $_POST["age"];
    $message = $_POST["message"];

    echo "Nome: "  . $name . "<br>";
    echo "Idade: "  . $age . "<br>";
    echo "Mensagem: "  . $message . "<br>";
}
?>