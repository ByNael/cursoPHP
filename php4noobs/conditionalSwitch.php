<?php

/*
 * Aula sobre condições
 *
 * Explicação sobre estrutura condicional de casos.
 * A ideia é fazer condições com uma lista pré definida de valores
 * que podem retornar verdadeiro, tendo uma unica opção para retornar falso,
 * sendo ela a default: (padrão).
 *
 * TROQUE (CONDIÇÃO) {
 *      caso VALOR1;
 *          diga 'mande curriculo';
 *          pare;
 *      caso VALOR2;
 *          dica 'linkedlin';
 *          pare;
 *      caso não;
 *          diga 'imediatamente';
 * }
 */

$name = 'nataN';
switch ($name) {
    case 'nataN';
        echo 'salve nataN, suave?';
        break;
    case 'prof-da-udemy';
        echo 'salve prof da udemy';
        break;
    default:
        echo 'salve pra vc ai aleatorio';
}