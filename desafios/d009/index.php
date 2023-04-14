<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio Médias</title>
</head>
<body>
    <?php
        //calculo de medias aritmeticas e medias ponderadas imprimindo na tela cada uma das duas
        $valor1 = $_GET['valor1'] ?? 0;
        $peso1 = $_GET['peso1'] ?? 0;
        $valor2 = $_GET['valor2'] ?? 0;
        $peso2 = $_GET['peso2'] ?? 0;
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="valor1">1° Valor</label>
            <input type="number" name="valor1" id="valor1" value="<?=$valor1?>">
            <label for="peso1">1° Peso</label>
            <input type="number" name="peso1" id="peso1" value="<?=$peso1?>">
            <label for="peso">2° Valor</label>
            <input type="number" name="valor2" id="valor2" value="<?=$valor2?>">
            <label for="valor2">2° Peso</label>
            <input type="number" name="peso2" id="peso2" value="<?=$peso2?>">
            <input type="submit" value="Calcular Médias">
        </form>
    </main>

    <section id="resultado">
        <h2>Cálculo das Médias</h2>
        <?php 
            $aritimetica = ($valor1 + $valor2)/2;
            $ponderada = (($valor1*$peso1)+($valor2*$peso2))/($peso1 + $peso2);

            echo "Analisando os valores $valor1 e $valor2: <br>";
            echo "A <strong>Média Aritmética Simples</strong> enre os valores é igual a " . number_format($aritimetica, 2, ",", ".") ."<br>";
            echo "A <strong>Média Aritmética Ponderada</strong> enre os valores é igual a " . number_format($ponderada, 2, ",", ".") . "<br>";
        ?>
    </section>
</body>
</html>
