<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio Salario</title>
</head>
<body>
    <?php
        //arquivo que recebe o salario e calcula quandos salarios minimos o usuario recebe e calcula a diferença depois imprime na tela 
        $salario = $_GET['salario'] ?? 0;
        $minimo = 1_380.60; //underline para separar os numeros entre dezenas e milhares
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Salario (R$):</label>
            <input type="number" name="salario" id="salario" value="<?=$salario?>">
            <p>Considerando o salário mínimo de <strong><?=number_format($minimo, 2, ",", ".")?></strong></p> 
            <input type="submit" value="Analisar">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado Final</h2>
        <?php 
            $divisao = (int)($salario/$minimo);
            $diferença = $salario % $minimo;

            echo "Quem recebe um salario de R\$" . number_format($salario, 2, ",", ".") . " ganha <strong> $divisao salários mínimos</strong> + R$" . number_format($diferença, 2, ",", ".");
        ?>
    </section>
</body>
</html>
