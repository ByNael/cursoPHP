<?php 
    /*
    Você foi contratado para desenvolver um gerador de senhas em PHP, onde o usuário poderá configurar o tamanho da senha e quais caracteres deseja adicionas.
    
    O programa deve seguir as restrições abaixo:
    - O programa deve permitir que o usuário informe o tamanho desejado para a senha, mas deve ter um limite entre 6 e 60 caracteres.
    - O programa deve permitir que o usuário defina se deseja ter letrar maiúsculas, letras minúsculas, caracteres numéricos e caracteres esperciais.
    - O programa deve impedir a geração da senha caso nenhum tipo de caractere for definido   
    */

    $tamanho = (int)readline("Qual o tamanho da senha?(entre 6 e 60)");

    if($tamanho < 6 || $tamanho > 60){
        die("Tamanho invalido\n");
    }

    $caracteresSenha = [];

    //validação e inserção de letras maiúsculas
    if(readline('Permitir letras maiúsculas? (s/n)') == 's'){
        $caracteresSenha = array_merge($caracteresSenha, range('A', 'Z'));
    }

    //validação e inserção de letras minúsculas
    if(readline('Permitir letras minúsculas? (s/n)') == 's'){
        $caracteresSenha = array_merge($caracteresSenha, range('a', 'z'));
    }

    //validação e inserção de números
    if(readline('Permitir numeros? (s/n)') == 's'){
        $caracteresSenha = array_merge($caracteresSenha, range(0, 9));
    }

    //validação e inserção de caracteres especiais
    if(readline('Permitir caracteres especiais? (s/n)') == 's'){
        $caracteresSenha[] = '!';
        $caracteresSenha[] = '?';
        $caracteresSenha[] = '@';
        $caracteresSenha[] = '#';
        $caracteresSenha[] = '$';
        $caracteresSenha[] = '%';
        $caracteresSenha[] = '&';
        $caracteresSenha[] = '*';
        $caracteresSenha[] = '(';
        $caracteresSenha[] = ')';
        $caracteresSenha[] = '-';
        $caracteresSenha[] = '_';
        $caracteresSenha[] = '+';
        $caracteresSenha[] = '´';
        $caracteresSenha[] = '`';
        $caracteresSenha[] = '=';
        $caracteresSenha[] = '{';
        $caracteresSenha[] = '}';
        $caracteresSenha[] = '[';
        $caracteresSenha[] = ']';
        $caracteresSenha[] = '^';
        $caracteresSenha[] = '~';
        $caracteresSenha[] = '/';
        $caracteresSenha[] = '|';
        $caracteresSenha[] = '°';
        $caracteresSenha[] = '.';
        $caracteresSenha[] = ',';
        $caracteresSenha[] = '>';
        $caracteresSenha[] = '<';
    }

    if(empty($caracteresSenha)){
        die("Nenhum tipo de caractere fornecido");
    }

    //ajusta a quantidade de caracteres
    while(count($caracteresSenha) < $tamanho){
        $caracteresSenha = array_merge($caracteresSenha, $caracteresSenha);
    }
    
    shuffle($caracteresSenha);

    $senha = array_slice($caracteresSenha, 0, $tamanho);

    echo "\nSua senha é essa: ". implode('', $senha) ."\n\n";

?>