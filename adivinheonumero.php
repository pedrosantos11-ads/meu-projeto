<?php
$numerosecreto = 67;
$chute = 0;
$tentativas = 0;

$min = 1;
$max = 100;

    while ($chute != $numerosecreto && $tentativas <= 100) {
            $chute = intval(($min + $max) / 2);
            $tentativas++;


    if ($tentativas % 10 == 0) {
        echo "Ainda não acertou noob!<br>";
    }
    if ($chute < $numerosecreto) {
        $min = $chute + 1;
    }elseif ($chute > $numerosecreto) {
        $max = $chute - 1;
    }
        echo "Tentativa $tentativas: chute $chute <br>";

    if ($chute == $numerosecreto) {
        echo "Acertou em $tentativas tentativas! Número: $chute!<br>";
        break;
    }


    }

