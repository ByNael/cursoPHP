<?php

/*
 * Aula sobre laço de repetição while
 *
 * Explicação sobreo  laço de repetição while, onde
 * você precisa que a condição seja verdadeira para que
 * o laço conitnue repetindo.
 *
 *  while(condição) {}
 */

$estouEmpregado = true;
$commitsZoados = 0;

while($estouEmpregado) {
    echo "Eu fiz " . $commitsZoados . "commits zoados e meu superior não curtiu" . PHP_EOL;
    $commitsZoados++;
    if ($commitsZoados === 8){
        $estouEmpregado = false;
        echo "agora estou desempregado!";
        break;
    }
}

$healthPoints = 100;
$maxHealthPoints = 100;

$monsterAttackDamage = 5;

while($healthPoints > 0){
    echo "HP: $healthPoints/$maxHealthPoints" . PHP_EOL;
    echo "Personagem atacado! -$monsterAttackDamage de HP" . PHP_EOL;

    $healthPoints -= $monsterAttackDamage;

    if($healthPoints <= 0){
        echo "Seu personagem morreu" . PHP_EOL;
        break;
    }

}