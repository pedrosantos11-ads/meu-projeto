<?php
$n = $_POST["numero"];
function tabuada($n) {
      for ($i = 1; $i <= 10; $i++) {
    echo $n . "x" . $i . "=" . ($n * $i) . "<br>";
  }
}
tabuada($n);
