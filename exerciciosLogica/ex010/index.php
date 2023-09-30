<?php 
    // Crie um script capaz de produzir, através de um laço de repetição, um array com a quantidade de elementos que o usuario pedir numéricos aleatórios entre 1 e 60
    // simulando o funcionamento do sorteio da mega sena. Atente-se ao fato de que os números aleatórios contidos dentro do array não podem ser repetidos.

    $arrayNumerico = [];
    do {
        $tamanho = readline('Escreva quantos números serão sorteados: ');
        if($tamanho < 1){
            echo 'O tamanho do array deve ser um número positivo' . PHP_EOL;
        }
    }while($tamanho < 1);
    
    while(count($arrayNumerico) < $tamanho){
        do{
            $numero = rand(1, 60);
        }while (in_array($numero, $arrayNumerico));
        $arrayNumerico[] = $numero;
    }

    echo 'Os números sorteados foram:' . PHP_EOL;
    foreach($arrayNumerico as $sorteio){
        echo '- ' . $sorteio . PHP_EOL;
    }
?>