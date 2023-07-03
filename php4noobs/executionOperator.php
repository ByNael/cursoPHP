<?php

/*
 * Aula sobre operador de execução
 *
 * Explicação sobre o operador de execução.
 * Esse operador executa um comando a nivel SHELL na sua maquina,
 * equiparando as funções exec(), shell_exec() e system()
 *
 * Operador: ``
 */

$output = `ls`;

echo $output;