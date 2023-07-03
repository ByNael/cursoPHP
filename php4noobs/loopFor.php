<?php

/*
 * Aula sobre laço de repetição FOR
 *
 * Explicação sobre o laço de repetição for
 *
 *
 * for (valor inicial; condição; incremento/decremento) {}
 */

echo "natan esta prestando atenção na aula" . PHP_EOL;

for($borrachada = 0; $borrachada <= 7; $borrachada++){
    echo "o natan tomou " . $borrachada . " borrachadas do amiguinho!" . PHP_EOL;
}

echo "natan esta tiltadasso" . PHP_EOL;

$tabuada = 5;
for($i = 0; $i <= 10; $i++){
    echo "$tabuada x  $i = "  . ($tabuada*$i) . PHP_EOL;
}