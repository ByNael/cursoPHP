<?php
    /*
        Você foi contratado para desenvolver um programa para gerenciar sorteio de nomes, onde o usuário poderá inserir vários nomes em uma lista e solicitar o sorteio de um desses nomes.

        o programa deve seguir as restrições abaixo:
        - O programa deverá ter um menu para que o usuário escolha se deve adicionar, listar, sortear ou sair
        - a opção listar só poderá ser exibida caso a lista contenha ao menos um nome
        - a opção sortear só poderá ser exibida caso a lista contenha ao menos dois nomes
        - O programa deverá sortear um nome por vez e deve remover os nomes já sorteados da lista
    */
    
    //array de nomes
    $nomes = [];

    //menu
    do{
        echo "Menu de opções\n";
        echo "1 - Adicionar\n";
        if(count($nomes) >= 1){
            echo "2 - Listar\n";
        }
        if(count($nomes) >= 2){
            echo "3 - Sortear\n";
        }
        echo "4 - Sair\n";

        $escolha = readline("Digite a opção desejada: ");

        echo "\n\n";

        switch($escolha){
            case 1:
                $nomes[] = readline('Digite um novo nome: ');
                echo "\n\n";
                break;
            case 2:
                if(count($nomes) >= 1){
                    echo "Nomes na lista:\n";
                    //$listar = implode(', ', $nomes);
                    //echo $listar;
                    foreach($nomes as $lista){
                        echo " - ".$lista."\n";
                    }
                    echo "\n\n";
                }
                break;
            case 3:
                if(count($nomes) >= 2){
                    $indiceAleatorio = array_rand($nomes);
                    echo "Nome aleatorio ".$nomes[$indiceAleatorio];
                    echo "\n\n";

                    unset($nomes[$indiceAleatorio]);
                }
                break;
        }
    }while($escolha != 4);

