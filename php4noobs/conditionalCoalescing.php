<?php

/*
 * Aula sobre condições de coalescência nula
 *
 * Explicação sobre coalescência nula, onde você faz uma checagem.
 * de uma variavel e vê se há um valor dentro da mesma, caso não você já retornar
 * um valor padrão.
 *
 *      valorPredefinido ?? retorno caso não exista valor;
 *
 *      isset(valorPredefinido) ?valorPredefinido : retorno caso não exista valor;
 */

$user = [
    'age' =>  21
];

echo $user['name'] ?? $user['twitch'] ?? 'Lino';

echo $user['name'] ?? 'lino';