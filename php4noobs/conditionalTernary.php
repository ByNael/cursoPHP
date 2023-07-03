<?php

/*
 * Aula sobre condições ternarias
 *
 * Explicação sobre estruturas condicionais ternárias.
 * Usar operador ternário ajuda na escrita de condições if/else diminuindo
 * para uma única linha. Ou seja, será algo para ser usado quando
 * você tem uma fácil comparação e um retorno SIMPLES.
 *
 *  condição ? retorno verdadeiro : retorno falso
 */

$age = 21;

$underAge =  $age >= 18
    ? 'Sim, vc é maior de idade'
    : 'Mano vc não é maior de idade';

echo $underAge;