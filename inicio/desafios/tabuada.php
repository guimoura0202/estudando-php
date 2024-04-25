<?php

$numero = 7;
echo "Tabuada do $numero: ".PHP_EOL;
for ($i = 1; $i < 10;$i++){
    $resultado = $i * $numero;
    echo "$numero X $i = $resultado". PHP_EOL;
}