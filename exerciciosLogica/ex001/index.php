<?php 
    /* A missão é desenvolver um programa para tornar a múdsica dos 5 patinhos mais dinâmica a ponto de podermos definir a quantidade total de patinhos e o programa imprimir sua letra completa em sequência*/

    //Input de quantidade de patinhos
    $patinhos = readline('Digite a quantidade de patinhos: ');

    //Validação da quantidade 
    if(!is_numeric($patinhos) || $patinhos <= 1 || $patinhos >= 10){
        echo "O número de patinhos digitado é invalido. \n";
        echo "É necessário enviar um valor maior do que 1 e menor do que 10. \n";
        exit;
    }

    //Itera a quantidade total de patinhos
    for($i = $patinhos; $i > 0; $i--){
        echo "\n";

        //Condição da quantidade de patinhos
        echo $i != 1 ?
             $i . " patinhos foram passear\n" :
             "1 patinho foi passear\n";

        //Textos fixos da letra
        echo "Alem das montanhas para brincar\n";
        echo "A mamãe gritou: Quá, Quá, Quá, Quá\n";

        //Condição para a quantidade restante de patinhos
        switch($i){
            case 2:
                echo "Mas só 1 patinho voltou de lá. \n";
                break;
            case 1:
                echo "Mas nenhum patinho voltou de lá. \n";
                break;
            default:
                echo "Mas só" . ($i - 1) . " patinhos voltaram de lá. \n";
                break;
        }
    }

    //Estrofe final da música
    echo "\n";
    echo "A mamãe patinha foi procurar\n";
    echo "Além das montanhas, na beira do mar\n";
    echo "A mamãe gritou: Quá, Quá, Quá, Quá,\n";
    echo "E os " . $patinhos . " patinhos voltaram de lá.\n";
