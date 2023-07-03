<?php

/*
 * Aula sobre funções
 *
 * Explicação sobre funções onde a ideia é criar um bloco de código reutilizável
 * onde você pode aplicar tanto para utilizar em outras partes do código
 * quanto para melhorar sua legibilidade.
 *
 * Sintaxe de criação de uma função:
 *
 *  function NOME_DA_FUNÇÃO(argumentos) {}
 */



/*
 * function sendMessage(string $nickname, string $message) {
    echo "[" . date('Y-m-d H:i:s') . "] $nickname: " . strtoupper("$message") . PHP_EOL;
}

sendMessage('nael', 'salve salve fml');
sendMessage('polly', 'hihihiho');
 */



//Como declarar funções de um jeito que todos vão te agradecer :);

//sempre deixe explicito no nome da função qual o objetivo dela
//tipar os argumentos é muito importante tambem
//camel case para definir funções
//snake_case = palavras sem capitalização e divididas por underlines, muito comum em testes unitários

//function calvuloBaseX(int $x, int $y) {
    //echo "alçdsfjkaslkdfaçlkjsdf";
//}

//function sendMessageToTwitch(string $user, string $message) {
    //echo 'tralalalalalaal';
//}

// ------------------------

//tipar funções exemplo abaixo
//para tipar uma função deixe dois pontos depois do parentese de argumentos e o tipo que você quer que ela retorne
function sendMessage(string $nickname, string $message): string {
    return "[" . date('Y-m-d H:i:s') . "] $nickname: " . strtoupper("$message") . PHP_EOL;
}

$return = sendMessage('nael', 'salve salve fml');
echo $return;